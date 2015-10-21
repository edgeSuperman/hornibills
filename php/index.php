<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

require_once (dirname(__FILE__).'/auth.php');

$type = trim($_REQUEST['type']);


$reader = new MongoClient ('mongodb://user:passwd@ip:port');
$writer = $reader;

if ($type == 'list') {
	
	//ORDER BY _id 1
    $cur = $reader->xdoc->doctypes->find(array('status' => 1));
    $list = array();
    while ($r = $cur->getNext()) {
        $r['_id'] = $r['_id']->__toString();
        $list[] = $r;
    }
    echo json_encode($list);
} elseif ($type == 'docs') {
	
    $parentid = $_REQUEST['parent'];
    $parent = $reader->xdoc->doctypes->findOne(array('_id' => new MongoId($parentid)));
    $parent['_id'] = $parent['_id']->__toString();
	$cur = $reader->xdoc->docs->find(array('parent' => $parentid, 'status' => 1));
	$list = array();
    while ($r = $cur->getNext()) {
        $r['_id'] = $r['_id']->__toString();
        $list[] = $r;
    }
    $data = array(
        'parent' => $parent,
        'list' => $list
    );
    echo json_encode($data);
} elseif ($type == 'add') {
    authW();
    $data = (array)json_decode(urldecode($_POST['content']));
	$data['parent'] = $_REQUEST['parent'];
    if (empty($data['parent'])) {
        echo 'no parent';
        exit;
    }
    $data['status'] = 1;
    $data['create_at'] = new MongoDate();
	$writer->xdoc->docs->insert($data);
	
} elseif ($type == 'addtype') {
    authW();
    $data = $_POST;
    $data['status'] = 1;
    $data['create_at'] = new MongoDate();
	$writer->xdoc->doctypes->insert($data);
} elseif ($type == 'delete') {
    authW();
    $name = $_POST['name'];
    $id = $_POST['id'];
    $writer->xdoc->$name->update(array('_id' => new MongoId($id)), array('status' => -1));
} elseif ($type == 'editdoc') {
    authW();
    $data = (array)json_decode(urldecode($_POST['content']));
	$id = ($data['_id']);
	unset($data['status']);
	unset($data['create_at']);
	unset($data['_id']);
     $writer->xdoc->docs->update(array('_id' => new MongoId($id)), $data);
} elseif ($type == 'getType') {
    $id = $_REQUEST['id'];
	$item = $reader->xdoc->doctypes->findOne(array('_id' => new MongoId($id)));
    $item['_id'] = $item['_id']->__toString();	
    echo json_encode($item);
} elseif ($type == 'editype') {
    authW();
    $id = ($_REQUEST['id']);
    $data = $_POST;
	$writer->xdoc->doctypes->update(array('_id' => new MongoId($id)), $data);
}
exit;
?>

