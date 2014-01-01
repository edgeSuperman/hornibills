<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @author Geoffray Warnants
 * @version 0.2b
 */

//
// Database "ns_bae_lvyou"
//

// ns_bae_lvyou.api
$api = array(
    array('aid'=>12,'url'=>'/pictravel/infosave','module_name'=>'pictravel','description'=>'【异步】新建画册','params'=>'{\"title\":\"画册标题\",\"bdstoken\":\"a9bfddacdcf0b6e4cee0965fdb5aced4\"}','response'=>'{\"errno\":0,\"ptid\":\"ea8563c80a11e4b59b23517f\"}','method'=>'POST'),
    array('aid'=>13,'url'=>'/pictravel/photo/upload','module_name'=>'pictravel','description'=>'【异步】画册图片上传','params'=>'{
    \"BDUSS\":\"这个地方比较特殊，flash取不到bduss所以需要传进去\",
    \"upload\":\"图片文件\",
    \"bdstoken\":\"a9bfddacdcf0b6e4cee0965fdb5aced4\",
    \"ptid\":\"当前画册id\"
}','response'=>'{
\"puid\": \"图片id-用来作为删除旋转的参数\",
\"thumbnail\": \"图片缩略图绝对地址-用来在flash里面显示缩略图\"
}','method'=>'POST'),
    array('aid'=>14,'url'=>'/pictravel/photo/rotation','module_name'=>'pictravel','description'=>'【异步】flash内部旋转图片','params'=>'{
    \"rotation_num\" : \"旋转角度——90顺时针，-90逆时针\",
    \"puid\" : \"图片id\",
    \"bdstoken\" : \"d68214a97df2e4e5a5acffcd1da3cc67\"
}','response'=>'{
    \"errno\" : 0    
}','method'=>'POST'),
    array('aid'=>15,'url'=>'$user','module_name'=>'user','description'=>'通用user结构','params'=>'   { \"user\": {
        \"username\": \"用户名\",
        \"email\": \"邮箱\",
        \"mobile\": \"电话\",
        \"uname\": \"用户名\",
        \"uid\": \"用户id\",
        \"nickname\": \"用户名\",
        \"avatar_large\": \"大头像的pic_url,需要开发者自己拼\",
        \"avatar_middle\": \"中头像的pic_url\",
        \"avatar_small\": \"小头像的pic_url\",
        \"self_introduction\": \"自我介绍\",
        \"location_sid\": \"所在地的sid，景点的id\",
        \"location\": \"所在地\",
        \"preferences\": [\"跟团\"],
        \"is_blocked\": \"是否被封禁，1是被，0是没被\",
        \"user_level\": \"0\",
        \"owner_level\": \"0\",
        \"admin_level\": \"2\",
        \"is_audited\": 1,
        \"trust_level\": \"信任级别，会决定是不是回复时候出验证码等等\",
        \"score\": \"用户积分\",
        \"wealth\": \"用户的财富值\",
        \"praise_count\": \"0\",
        \"notes_count\": \"3\",
        \"notes_count_total\": \"30\",
        \"recommend_count\": \"105\",
        \"common_posts_count\": \"184\",
        \"going_count\": \"想去地方的数量\",
        \"gone_count\": \"去过地方的数量\",
        \"version_count\": \"0\",
        \"create_time\": \"0\",
        \"update_time\": \"0\",
        \"last_login_time\": \"最后一次登录的时间\",
        \"recommend_notes_count\": \"64\",
        \"travel_count\": \"2\",
        \"travel_posts_count\": \"7\",
        \"travel_replys_count\": \"8\",
        \"foot_print_count\": \"8\",
        \"trip_route_count\": \"3\",
        \"be_recommended_count\": \"0\",
        \"favorite_count\": \"13\",
        \"pic_travel_count\": 8,
        \"is_admin\": 1,
        \"is_owner\": 0,
        \"is_daren\": 0,
        \"is_famous\": 0,
        \"is_reply_trust\": 0,
        \"has_login_record\": 1,
        \"app_has_login_record\": 0,
        \"reply_day_count\": \"2\",
        \"is_activated\": 1,
        \"has_uname\": 1,
        \"is_bindemail\": 0,
        \"usersource\": 0,
        \"is_bundle\": 0,
        \"login_src\": 0,
        \"bdstoken\": \"889eca9597880f0f7d9fb16203e932b0\",
        \"is_login\": 1
    }}','response'=>'{}','method'=>'GET'),
    array('aid'=>16,'url'=>'/pictravel/ajax/getcloudalbums','module_name'=>'pictravel','description'=>'【异步】从百度相册取相册列表','params'=>'{}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"album_list\": [
            {
                \"album_id\": \"相册id\",
                \"album_name\": \"相册名\",
                \"picture_num\": \"相册图片数目\",
                \"create_time\": 1357275378,
                \"cover_picture_url\": \"相册封面缩略图地址\"
            }
        ],
        \"default_album\": {
            \"pic_list\": [
                {
                    \"picture_id\": \"图片id\",
                    \"user_id\": \"541a77d0f7e321c5d27b4df5\",
                    \"album_id\": \"所属相册id\",
                    \"permission\": 1,
                    \"upload_time\": 1372670771,
                    \"picture_desc\": \"图片描述\",
                    \"exif\": {
                        \"date_time_original\": 1372670771
                    },
                    \"picture_width\": 612,
                    \"picture_height\": 612,
                    \"picture_file_name\": \"1\",
                    \"picture_url\": {
                        \"small\": \"图片小图地址——最大边130px\",
                        \"middle\": \"图片中图地址——最大边400px\",
                        \"big\": \"图片原图地址—\",
                        \"vbig\": \"图片大图地址——最大边1600px\"
                    }
                }
            ],
            \"pic_count\": \"默认相册图片数目\"
        }
    }
}','method'=>'GET'),
    array('aid'=>18,'url'=>'/notes/ajax/cancelbadge','module_name'=>'notes','description'=>'撤销首日封','params'=>'{
    \"nid\": \"游记nid\",
    \"t\": \"获取最新时间，防止ie下链接有缓存\",
    \"format\": \"ajax\",
    \"bdstoken\": \"请求必须参数\"
}','response'=>'{
    \"errno\": \"0\",
    \"msg\": \"\",
    \"data\": []
}','method'=>'POST'),
    array('aid'=>19,'url'=>'/notes/photo/deletebatch','module_name'=>'notes','description'=>'批量删除游记图片','params'=>'{
    \"pic_ids[]\": \"批量删除图片的id\",
    \"aid\": \"图片所属的相册的id\",
    \"bdstoken\": \"请求必须的参数\"
}','response'=>'{
    \"errno\": \"0\",
    \"msg\": \"\",
    \"data\": []
}','method'=>'POST'),
    array('aid'=>20,'url'=>'/notes/photo/delete','module_name'=>'notes','description'=>'删除游记图片','params'=>'{
    \"nid\": \"notes的nid\",
    \"aid\": \"图片所属的相册的id\",
    \"pic_id\": \"图片的id\",
    \"format\": \"ajax\",
    \"bdstoken\": \"请求必须的参数\"
}','response'=>'{
    \"errno\": \"0\",
    \"msg\": \"\",
    \"data\": []
}','method'=>'POST'),
    array('aid'=>21,'url'=>'/notes/album/cover','module_name'=>'notes','description'=>'设置游记封面','params'=>'{
    \"nid\": \"游记的nid\",
    \"aid\": \"图片所属的相册的id\", 
    \"pic_id\": \"图片的id\",
    \"format\": \"ajax\",
    \"bdstoken\": \"请求必须的参数\"
}','response'=>'{
    \"errno\": \"0\",
    \"msg\": \"\",
    \"data\": []
}','method'=>'POST'),
    array('aid'=>22,'url'=>'/pictravel/ajax/getcloudpics','module_name'=>'pictravel','description'=>'【异步】从百度相册取相册图片','params'=>'{\"aidcloud\":\"云相册相册id\",\"pn\":\"第几页——云相册和我们的不一样，他这里是第几页，和我们站内的pn(偏移量)不一样\",\"rn\":\"每一页显示的数目\"}','response'=>'{\"errno\":0,\"msg\":\"\",\"data\":{\"album_id\":\"相册id\",\"cur_page\":\"当前页码\",\"page_size\":\"每页的图片数目\",\"pic_count\":\"当前相册的图片数目\",\"album_name\":\"越南啊\",\"create_time\":1355800859,\"cover_picture_url\":3817716747,\"pic_list\":[{\"picture_id\":\"23e5174743cc3134e44ecaf9899e213417674ac5\",\"user_id\":\"541a77d0f7e321c5d27b4df5\",\"album_id\":\"8c416e0ec59608d8a049a059c0782f2eefcf9e2a\",\"permission\":1,\"upload_time\":1355800892,\"picture_desc\":\"_MG_1534\",\"exif\":{\"date_time_original\":1348368875},\"picture_width\":1600,\"picture_height\":1067,\"picture_file_name\":\"_MG_1534.JPG\",\"picture_url\":{\"small\":\"http://d.hiphotos.bdimg.com/album/scrop%3D130/sign=e04497af510fd9f9a44912365510e519/f11f3a292df5e0fe929931d25c6034a85fdf725b.jpg\",\"middle\":\"http://d.hiphotos.bdimg.com/album/s%3D400/sign=6e848134912397ddd27999046980b216/f11f3a292df5e0fe929931d25c6034a85fdf725b.jpg\",\"big\":\"http://d.hiphotos.bdimg.com/album/pic/item/f11f3a292df5e0fe929931d25c6034a85fdf725b.jpg\",\"vbig\":\"http://d.hiphotos.bdimg.com/album/s%3D1600/sign=bbc2476365380cd7e21ea6eb9174af34/f11f3a292df5e0fe929931d25c6034a85fdf725b.jpg\"}}]}}','method'=>'GET'),
    array('aid'=>23,'url'=>'/pictravel/ajax/addcloudpics','module_name'=>'pictravel','description'=>'【异步】从百度相册取图保存到画册','params'=>'{
    
}','response'=>'{}','method'=>'POST'),
    array('aid'=>24,'url'=>'/mis/ajax/notes/subweight/add','module_name'=>'mis','description'=>'给游记降权','params'=>'{
    \"nid\":\"游记nid\",
    \"intro\":\"备注\"
    }','response'=>'{
    \"errno\":\"\"}','method'=>'POST'),
    array('aid'=>25,'url'=>'/mis/ajax/notes/subweight/cancel','module_name'=>'mis','description'=>'取消游记降权','params'=>'{
    \"pass_nids[]\":\"数组，直接在key上标记123\"
    }','response'=>'{
    \"errno\":\"\"}','method'=>'POST'),
    array('aid'=>26,'url'=>'/mis/notes/subweight','module_name'=>'mis','description'=>'游记降权页面','params'=>'{
    \"rn\":\"\",
    \"pn\":\"\",
    \"nid\":\"可选的，如果有nid，则只选出对应的游记，主要目的就是看下是否被降权过\"}','response'=>'{
    \"errno\":0,
    \"list_comments\": \"一个游记列表\",
     \"list\":[
            {
                \"nid\":\"游记id\",
                \"title\":\"游记标题\",
                \"intro\":\"备注\"
            }
        ],
    \"count\":\"总数\",
    \"pagelist_comments\":\"通用pagelist结构\",
    \"pagelist\":[]
}','method'=>'GET'),
    array('aid'=>27,'url'=>'$content','module_name'=>'scene','description'=>'目的地content字段结构','params'=>'{
    \"info\": {
        \"abstract\": \"一句话简介\",
        \"en_sname\": \"基本信息-英文名\",
        \"alias\": \"基本信息-别名\",
        \"level\": \"基本信息-景点级别\",
        \"opening_hours\": \"基础信息-开放时间\",
        \"price\": \"基础信息-门票\",
        \"address\": \"详细地址\",
        \"phone\": \"电话\",
        \"visa_level\": \"签证难易度-跑数据待定\",
        \"cost\": \"开销-跑数据待定\",
        \"position\": \"位置-需要和编辑同学待定\"
    },
    \"info#\": \"基本信息&基础信息\",
    \"traffic\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"remote\": [
            {
                \"name\": \"\",
                \"name#\": \"交通方式\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\",
                \"ext\": \"图片的ext信息\"
            }
        ],
        \"remote#\": \"固定板块-到达与离开\",
        \"local\": [
            {
                \"name\": \"\",
                \"name#\": \"交通方式\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\",
                \"ext\": \"图片的ext信息\"
            }
        ],
        \"local#\": \"固定板块-本地交通\",
        \"extra\": [
            {
                \"name\": \"文字描述\",
                \"url\": \"描述对应的url\"
            }
        ],
        \"extra#\": \"额外信息\",
        \"near\": {
            \"nearbus\": \"附近公交站\",
            \"nearsubway\": \"附近地铁站\"
        },
        \"near#\": \"附近\"
    },
    \"traffic#\": \"内页-交通\",
    \"dining\": {
        \"article\": [
            {
                \"name\": \"\",
                \"name#\": \"文章描述\",
                \"url\": \"\",
                \"url#\": \"url地址\"
            }
        ],
        \"article#\": \"文章\",
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"food\": [
            {
                \"name\": \"条目名称\",
                \"desc\": \"详细信息\",
                \"pic_url\": \"图片url\",
                \"pic_id\": \"图片id\",
                \"ext\": \"图片的额外信息\",
                \"type_tag\": \"42数字类型\",
                \"type_tag#\": \"热门标签类型\",
                \"hot_tag\": [],
                \"hot_tag_content\": \"热门程度\",
                \"restaurants\": [
                    \"5ae22bb1a1344c9130041d40\"
                ],
                \"restaurants#\": \"关联的餐馆\"
            }
        ],
        \"food#\": \"固定板块-小吃\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\"
    },
    \"dining#\": \"内页-美食\",
    \"accommodation\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他—url\"
            }
        ],
        \"extra#\": \"其他\",
        \"area\": [
            {
                \"name\": \"\",
                \"name#\": \"住宿区域\",
                \"desc\": \"\",
                \"desc#\": \"详细介绍\",
                \"hotels\": [],
                \"hotels#\": \"关联的酒店id\"
            }
        ],
        \"area#\": \"固定板块-住宿区域\"
    },
    \"accommodation#\": \"内页-住宿\",
    \"shopping\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"goods\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ],
        \"goods#\": \"固定板块-特色商品\",
        \"business\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ],
        \"business#\": \"固定板块-热门商业街\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\"
    },
    \"shopping#\": \"内页-购物\",
    \"entertainment\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"activity\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ],
        \"activity#\": \"固定板块-玩什么\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\",
        \"where\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ],
        \"where#\": \"固定板块-在哪玩\"
    },
    \"entertainment#\": \"内页-活动\",
    \"attention\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ],
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\"
    },
    \"attention#\": \"内页-小贴士【注意事项+之前的useful】\",
    \"leave_info\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\",
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ]
    },
    \"leave_info#\": \"内页-出境信息\",
    \"notes_list_top\": [],
    \"notes_list_top#\": \"首页-热门游记\",   
    \"hot_scene_show_type\": {
        \"type\": \"1\",
        \"type#\": \"热门景点展示模板0：图片列表；1：景点大地图\"
    },
    \"hot_scene_show_type#\": \"热门景点展示模板-已废弃\",
    \"new_geography_history\": {
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ],
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\"
    },
    \"new_geography_history#\": \"内页-文化地理-server使用\",
    \"ticket_info\": {
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ],
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\"
    },
    \"ticket_info#\": \"内页-门票信息\",
    \"new_line\": {
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"路线名称\",
                \"desc\": \"\",
                \"desc#\": \"路线详细描述\",
                \"path\": [
                    {
                        \"path\": [
                            {
                                \"sname\": \"\",
                                \"sname#\": \"途经地名称\",
                                \"sid\": \"\",
                                \"sid#\": \"途经地sid\",
                                \"map_x\": 12957713.019335,
                                \"map_x#\": \"途经地坐标\",
                                \"map_y\": 4825779.786533,
                                \"map_y#\": \"途经地坐标\"
                            }
                        ],
                        \"desc\": \"\",
                        \"desc#\": \"途经描述\"
                    }
                ],
                \"path#\": \"途经地\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\",
                \"recommend\": \"\",
                \"recommend#\": \"标记是否为推荐路线0/1\"
            }
        ],
        \"desc\": \"\",
        \"desc#\": \"全部路线描述\"
    },
    \"new_line#\": \"内页-路线【新】-需要翠姐重新整理\",
    \"highlight\": {
        \"list\": [
            \"图片url\"
        ],
        \"list#\": \"亮点排序很据所在数组元素的顺序\"
    },
    \"highlight#\": \"首页-亮点排序\",
    \"unmissable\": {
        \"more\": 1,
        \"more#\": \"勾选去更多活动页面标记0：去景点页面；1：去活动页面\",
        \"center\": {
            \"lat\": 38.274886,
            \"lat#\": \"中心坐标\",
            \"lng\": 109.243149,
            \"lng#\": \"中心坐标\"
        },
        \"center#\": \"地图中心点坐标\",
        \"zoom\": 5,
        \"zoom#\": \"缩放比例\",
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"名字\",
                \"url\": \"\",
                \"url#\": \"网页地址\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ]
    },
    \"unmissable#\": \"首页-不可错过\",
    \"news\": {
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"标题\",
                \"url\": \"\",
                \"url#\": \"地址\",
                \"end_time\": \"2012-03-10\",
                \"end_time#\": \"截止时间\"
            }
        ]
    },
    \"news#\": \"首页-实时旅讯\",
    \"video\": {
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"标题\",
                \"code\": \"\",
                \"code#\": \"视频代码\",
                \"pic_url\": {},
                \"pic_url#\": \"视频封面图片\",
                \"pic_id\": {},
                \"pic_id#\": {}
            }
        ]
    },
    \"video#\": \"首页-视频\",
    \"around_map\": {
        \"center\": {
            \"lat\": 39.914004,
            \"lat#\": \"中心坐标\",
            \"lng\": 116.39985,
            \"lng#\": \"中心坐标\"
        },
        \"center#\": \"地图中心点坐标\",
        \"zoom\": 19,
        \"zoom#\": \"地图缩放比例\"
    },
    \"around_map#\": \"首页-周边地图\",
    \"around_scene\": {
        \"list\": [
            \"cc11463263cf7ae3b9d4dff3\"
        ],
        \"list#\": \"周边景点sid列表\"
    },
    \"around_scene#\": \"首页-周边景点\",
    \"relate_scene\": {
        \"list\": [
            \"cc11463263cf7ae3b9d4dff3\"
        ],
        \"list#\": \"相关景点sid列表\"
    },
    \"relate_scene#\": \"首页-相关景点\",
    \"partner\": {
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"名称\",
                \"url\": \"\",
                \"url#\": \"网络地址\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ]
    },
    \"partner#\": \"首页-合作机构\",
    \"guide\": {
        \"list\":[
            \"4fec4414f7ea812e5e7d8cd5\"
        ]
    },
    \"guide#\": \"路书配置\",
    \"besttime\":{
        \"simple_desc\":\"精简版描述\",
        \"more_desc\":\"详细版描述\",
        \"recommend_visit_time\": \"推荐旅游时间\",
        \"month\":[1,2,3,4,5,6,7,8,9,10,11,12]
    },
    \"besttime#\": \"最佳旅游时节\"
}','response'=>'{}','method'=>'GET'),
    array('aid'=>28,'url'=>'/pictravel/destination/add','module_name'=>'pictravel','description'=>'【异步】画册添加拍摄地点','params'=>'{
    \"ptid\" : \"706cc04edf64eaf47429b28c\",
    \"ptid#\" : \"当前画册id\",
    \"pdid\" : \"b3d049252f461cc85152edf6\",
    \"pdid#\" : \"当前天的id\",
    \"scenes[]\" : \"{\'sid\':\'b936706693d2d06f5707d5d9\',\'name\':\'青海湖\'}\",
    \"scenes[]#\" : \"添加目的地的列表 sid:目的地id, name:目的地名\",
    \"bdstoken\" : \"f0447c3e4316ffdc195ff0fc2d26664f\"
}','response'=>'{
  \"errno\": 0
}','method'=>'POST'),
    array('aid'=>30,'url'=>'/notes/ajax/setbadge','module_name'=>'notes','description'=>'设置首日封','params'=>'{
    \"datetime\": \"设置徽章时间\",
    \"pic_url\": \"设置徽章的pic_url\",
    \"pic_ext\": {
        \"width\": \"图片的宽度\",
        \"height\": \"图片的高度\"
    },
    \"nid\": \"游记的nid\",
    \"t\": \"请求时间戳，防止缓存\",
    \"format\": \"ajax\",
    \"bdstoken\": \"请求必须参数\"
}','response'=>'{
    \"errno\": \"0\",
    \"msg\": \"\",
    \"data\": []
}','method'=>'POST'),
    array('aid'=>31,'url'=>'/mis/scene/guide/edit/picdelete','module_name'=>'mis','description'=>'【异步】攻略预览图片删除','params'=>'{
    \"gid\" : \"59141dca6dc3368c45ec80d4\",
    \"gid#\" : \"当前攻略的id\",
    \"pic_id\" : \"59141dca6dc3368c45ec80d4\",
    \"pic_id#\" : \"被删除图片的id\"
}','response'=>'{
    \"errno\" : 0    
}','method'=>'POST'),
    array('aid'=>32,'url'=>'/mis/scenelist/editsave','module_name'=>'mis','description'=>'人工修改景点分数','params'=>'[
    {
        \"parent_sid\": \"当存在时，则传该参数，可不传\",
        \"score\":\"人工加权的分数\"
    }
]','response'=>'{
    \"errno\": \"0\"
}','method'=>'POST'),
    array('aid'=>34,'url'=>'/mis/scenelist/addsave','module_name'=>'mis','description'=>'新增景点保存接口','params'=>'{
    \"parent_sid\": \"父景点的sid\",
    \"sid\": \"添加的景点的sid\",
    \"sname\":\"新增景点名字\",
    \"surl\":\"新增景点surl\",
    \"score\":\"人工赋值分数\"
}','response'=>'{
    \"errno\": \"0表示添加成功，200表示添加重复，其他表示添加失败\"
}','method'=>'POST'),
    array('aid'=>35,'url'=>'/mis/scenelist/adddel','module_name'=>'mis','description'=>'删除景点接口','params'=>'{
    \"sid\":\"要删除景点的sid\",
    \"parent_sid\": \"景点所属的父景点\"
}','response'=>'{
    \"errno\": \"0\"  
}','method'=>'POST'),
    array('aid'=>36,'url'=>'/{surl}','module_name'=>'scene','description'=>'不可错过数据模版数据','params'=>'{
    \"scene\": {
        \"unmissable\": {
            \"list\": [{
                \"name\": \"故宫\",
                \"url\": \"http:\\/\\/lvyou.baidu.com\\/gugong\\/\",
                \"desc\": \"红红的宫墙，金黄的琉璃，尽显皇家风范。隐藏着厚重历史的紫禁城，多少穿越的梦想在这里实现。\",
                \"pic_url\": \"6a600c338744ebf8659d9d9ed9f9d72a6159a7a7\",
                \"pic_id\": \"6f4be17362ffb1a2d91b495c\",
                \"ext\": {
                    \"width\": \"315\",
                    \"height\": \"210\",
                    \"size\": \"57553\"
                },
                \"sname\": \"故宫\",
                \"surl\": \"gugong\",
                \"map_x\": \"12958130.026685\",
                \"map_y\": \"4826652.5139393\",
                \"sid\": \"6208c401f1153f0fd41f74fe\"
            },{
                
            }]
        }
    }
}','response'=>'{
    \"errno\": \"\"
}','method'=>'GET'),
    array('aid'=>37,'url'=>'/{surl}/jingdian','module_name'=>'scene','description'=>'景点内容模版数据','params'=>'{\"surl\":\"beijing\"}','response'=>'{\"errno\":0,\"msg\":\"\",\"data\":{\"user\":{\"is_login\":0},\"pop_sidebar1\":\" \",\"pop_sidebar2\":\"<div class=\\\"app-download pr nslog-show\\\" data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"show\\\",\\\"pos\\\":\\\"app-download-show\\\"}\'>\\r\\n<div class=\\\"nslog-area\\\" data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"click\\\",\\\"pos\\\":\\\"app-total-click\\\"}\'>\\r\\n    <a data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"click\\\",\\\"pos\\\":\\\"app-icon-click\\\"}\' target=\\\"_blank\\\" class=\\\"nslog app-icon\\\" href=\\\"/app/baidulvyou?from=scene\\\"></a>\\r\\n    <a data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"click\\\",\\\"pos\\\":\\\"app-iphone-click\\\"}\' target=\\\"_blank\\\" class=\\\"app-icon phone-ios nslog\\\" href=\\\"https://itunes.apple.com/cn/app/id467046753?mt=8\\\"></a>\\r\\n    <a data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"click\\\",\\\"pos\\\":\\\"app-pad-click\\\"}\' target=\\\"_blank\\\" class=\\\"app-icon phone-pad nslog\\\" href=\\\"https://itunes.apple.com/cn/app/bai-du-lu-youhd/id621986255?mt=8\\\"></a>\\r\\n    <a data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"click\\\",\\\"pos\\\":\\\"app-android-click\\\"}\' target=\\\"_blank\\\" class=\\\"app-icon phone-android nslog\\\" href=\\\"http://lv.baidu.com/event/s/app/baidutrip_andr_1000.apk\\\"></a>\\r\\n    </div>\\r\\n</div>\\r\\n<style>\\r\\n.app-download{\\r\\n    width:260px;\\r\\n    height:127px;\\r\\n    background: #f7f7f7 url(\\\"http://lvyou.baidu.com/static/absolute/app-download-bg.jpg\\\") no-repeat;\\r\\n}\\r\\n.app-download .app-icon{\\r\\n    position: absolute;\\r\\n    top:16px; left: 16px; width: 54px; height: 54px;\\r\\n}\\r\\n.app-download .app-icon:hover{\\r\\n    background: #f7f7f7 url(\\\"http://lvyou.baidu.com/static/absolute/app-download-btn.jpg\\\") no-repeat 0 0;\\r\\n}\\r\\n.app-download .phone-ios,\\r\\n.app-download .phone-pad,\\r\\n.app-download .phone-android{\\r\\n    width: 71px;\\r\\n    height: 25px;\\r\\n    left: 7px;\\r\\n    top: 80px;\\r\\n}\\r\\n.app-download .phone-pad{\\r\\n    left: 85px;\\r\\n}\\r\\n.app-download .phone-android{\\r\\n    left:162px;\\r\\n}\\r\\n.app-download .phone-ios:hover{\\r\\n    background-position: -74px -24px;\\r\\n}\\r\\n.app-download .phone-pad:hover{\\r\\n    background-position: -152px -24px;\\r\\n}\\r\\n.app-download .phone-android:hover{\\r\\n    background-position: -229px -24px;\\r\\n}\\r\\n</style>\",\"pop_sidebar3\":\"[\\r\\n    {\\r\\n        \\\"sname\\\":\\\"哈尔滨\\\",\\r\\n        \\\"sid\\\": \\\"c45891ca87274646403518f7\\\",\\r\\n        \\\"surl\\\": \\\"haerbin\\\",\\r\\n        \\\"android_url\\\": \\\"http://lvyou.baidu.com/event/s/app/haerbin.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https://itunes.apple.com/cn/app/chu-fa-ha-er-bin/id594749116?mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http://lvyou.baidu.com/event/s/app/haerbin-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"香港\\\",\\r\\n        \\\"sid\\\": \\\"79c0adc41efa15d8330ab4f5\\\",\\r\\n        \\\"surl\\\": \\\"xianggang\\\",\\r\\n        \\\"android_url\\\": \\\"http://lvyou.baidu.com/event/s/app/hongkong.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https://itunes.apple.com/us/app/chu-fa-xiang-gang-shi-yong/id596693479?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http://lvyou.baidu.com/event/s/app/xianggang-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"厦门\\\",\\r\\n        \\\"sid\\\": \\\"46748b2de74f2ebeee3864f0\\\",\\r\\n        \\\"surl\\\": \\\"xiamen\\\",\\r\\n        \\\"android_url\\\": \\\"http://lvyou.baidu.com/event/s/app/xiamen.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https://itunes.apple.com/us/app/chu-fa-sha-men-shi-yong-lu/id596678160?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http://lvyou.baidu.com/event/s/app/xiamen-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"三亚\\\",\\r\\n        \\\"sid\\\": \\\"052a5d285f52dec9c3f9f1f7 \\\",\\r\\n        \\\"surl\\\": \\\"sanya\\\",\\r\\n        \\\"android_url\\\": \\\"http://lvyou.baidu.com/event/s/app/andorid-lvyou-walk-sanya-release.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https://itunes.apple.com/us/app/chu-fa-san-ya-shi-yong-lu/id597817254?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http://lvyou.baidu.com/event/s/app/sanya-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"丽江\\\",\\r\\n        \\\"sid\\\": \\\"5ecd8727464640351f1219f4\\\",\\r\\n        \\\"surl\\\": \\\"lijiang\\\",\\r\\n        \\\"android_url\\\": \\\"http://lvyou.baidu.com/event/s/app/andorid-lvyou-walk-lijiang-release.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https://itunes.apple.com/us/app/chu-fa-li-jiang-shi-yong-lu/id598888418?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http://lvyou.baidu.com/event/s/app/lijiang-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"北京\\\",\\r\\n        \\\"sid\\\": \\\"795ac511463263cf7ae3def3\\\",\\r\\n        \\\"surl\\\": \\\"beijing\\\",\\r\\n        \\\"android_url\\\": \\\"http://lvyou.baidu.com/event/s/app/beijing.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https://itunes.apple.com/us/app/chu-fa-bei-jing-shi-yong-lu/id598239439?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http://lvyou.baidu.com/event/s/app/beijing-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"杭州\\\",\\r\\n        \\\"sid\\\": \\\"41fd1e4019c66b17a516aaf1\\\",\\r\\n        \\\"surl\\\": \\\"hangzhou\\\",\\r\\n        \\\"android_url\\\": \\\"http://lvyou.baidu.com/event/s/app/hangzhou.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https://itunes.apple.com/us/app/chu-fa-hang-zhou-shi-yong/id626211446?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http://lvyou.baidu.com/event/s/app/hangzhou-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"德国\\\",\\r\\n        \\\"sid\\\": \\\"cecc1efa15d8330a2308b5fb\\\",\\r\\n        \\\"surl\\\": \\\"germany\\\",\\r\\n        \\\"android_url\\\": \\\"http://lvyou.baidu.com/event/s/app/germany.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https://itunes.apple.com/us/app/chu-fa-guo-shi-yong-lu-xing/id651355826?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http://lvyou.baidu.com/event/s/app/germany-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"台湾\\\",\\r\\n        \\\"sid\\\": \\\"9cf3f47a261257ae7e7e5df5\\\",\\r\\n        \\\"surl\\\": \\\"taiwan\\\",\\r\\n        \\\"android_url\\\": \\\"http://lvyou.baidu.com/event/s/app/taiwan.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https://itunes.apple.com/us/app/chu-fa-tai-wan-shi-yong-lu/id660008762?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http://lvyou.baidu.com/event/s/app/taiwan-icon.png\\\"\\r\\n    }\\r\\n]\",\"pop_sidebar4\":\"<a title=\\\"百科求知\\\" href=\\\"http://baike.baidu.com/feature/mandela/index.html\\\" target=\\\"_blank\\\"><img width=\\\"360\\\" height=\\\"130\\\" src=\\\"http://baike.baidu.com/cms/s/mandela/260x130.png\\\" /></a>\\r\\n\",\"cms_self_conf_var\":[\"pop_sidebar1\",\"pop_sidebar2\",\"pop_sidebar3\",\"pop_sidebar4\"],\"scene\":{\"sid\":\"5ecd8727464640351f1219f4\",\"surl\":\"lijiang\",\"sname\":\"丽江\",\"parent_sid\":\"17070a5c91ca872746461bf4\",\"uid\":\"e66c44b50a92371d9b32939b\",\"view_count\":\"3232612\",\"cid\":\"2\",\"star\":\"5\",\"scene_layer\":\"4\",\"is_china\":\"1\",\"vid\":\"b9b47115658d04211dc8f57e\",\"ext\":{\"sid\":\"5ecd8727464640351f1219f4\",\"scene_layer\":\"4\",\"fmap_x\":\"459075808\",\"fmap_y\":\"755632790\",\"visit_count\":\"20949\",\"map_x\":\"11157696.565\",\"map_y\":\"3089952.0592873\",\"map_info\":\"100.230203,26.887725 \",\"going_count\":\"6788\",\"gone_count\":\"8666\",\"md5\":\"cfb0cd8b50085a9de8b8261e6ff3a8a2\",\"ipad_package_md5\":\"9f31150c0e24dc7b2986d0117b56118f\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"丽江古城\",\"en_sname\":\"Lijiang\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"我们来丽江，遇见自己，遗忘过往，漫步古城感受闲适光阴里的一花一木，让午后的一米阳光一下子照进心中最柔软的地方。\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"going_count\":6788,\"gone_count\":8666,\"scene_path\":[{\"sid\":\"c921e59aba1c706693d2d7f3\",\"surl\":\"yazhou\",\"sname\":\"亚洲\",\"parent_sid\":\"0\"},{\"sid\":\"5007715ac511463263cfd1f3\",\"surl\":\"zhongguo\",\"sname\":\"中国\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\"},{\"sid\":\"17070a5c91ca872746461bf4\",\"surl\":\"yunnan\",\"sname\":\"云南\",\"parent_sid\":\"5007715ac511463263cfd1f3\"},{\"sid\":\"5ecd8727464640351f1219f4\",\"surl\":\"lijiang\",\"sname\":\"丽江\",\"parent_sid\":\"17070a5c91ca872746461bf4\"}],\"nav\":[\"main\",\"notes\",\"photolist\",\"allview\",\"map\",\"around\",\"traffic\",\"dining\",\"accommodation\",\"shopping\",\"entertainment\",\"attention\",\"geography_history\",\"line\",\"ticket_info\"],\"module\":\"allview\",\"scene_total\":102,\"current_page\":1,\"current_cid\":null,\"screen_list\":[{\"cid\":500,\"cname\":\"城市\"},{\"cid\":501,\"cname\":\"古镇乡村\"},{\"cid\":503,\"cname\":\"自然景观\"},{\"cid\":504,\"cname\":\"人文景观\"},{\"cid\":505,\"cname\":\"展馆\"},{\"cid\":507,\"cname\":\"休闲度假\"},{\"cid\":508,\"cname\":\"其他\"}],\"scene_list\":[{\"sid\":\"b15d7068c2f160adbc2c83fb\",\"surl\":\"xinjiapo\",\"sname\":\"新加坡\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"870509\",\"cid\":\"27\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"ad4346266af590167f92cb66\",\"ext\":{\"sid\":\"b15d7068c2f160adbc2c83fb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"1733\",\"map_x\":\"11546382.429057\",\"map_y\":\"156968.46144143\",\"map_info\":\"103.715308,1.413604\",\"going_count\":\"1122\",\"gone_count\":\"529\",\"md5\":\"3c1a62131c8ddc24191d641ba0f61b24\",\"ipad_package_md5\":\"60d3258ef42c4b61dfeae4080d51f26b\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"狮城\",\"en_sname\":\"Singapore\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"3\",\"abs_desc\":\"她是典型的城市国家，她以“花园城市”著称，她孕育了亚洲四小龙之一，新加坡用自己的繁荣、整洁、娱乐、民风、气候吸引着游客纷至沓来。\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"3812b31bb051f8193bdb78ffdab44aed2f73e78d\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":683,\\\"size\\\":125067}\",\"full_url\":\"http://f.hiphotos.baidu.com//lvpics/w%3D300/sign=b4e7e59d972bd40742c7d5fd4b889e9c/3812b31bb051f8193bdb78ffdab44aed2f73e78d.jpg\"},\"abs_desc\":\"她是典型的城市国家，她以“花园城市”著称，她孕育了亚洲四小龙之一，新加坡用自己的繁荣、整洁、娱乐、民风、气候吸引着游客纷至沓来。\",\"level\":\"5\"},{\"sid\":\"1d5cb0656bc57594baebbffb\",\"surl\":\"maerdaifu\",\"sname\":\"马尔代夫\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"892220\",\"cid\":\"1\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"ea9e0d80c17adf73df421941\",\"ext\":{\"sid\":\"1d5cb0656bc57594baebbffb\",\"scene_layer\":\"2\",\"fmap_x\":\"679434387\",\"fmap_y\":\"630124077\",\"visit_count\":\"3646\",\"map_x\":\"8195348.2433942\",\"map_y\":\"601182.18140267\",\"map_info\":\"73.612731,5.423207\",\"going_count\":\"2822\",\"gone_count\":\"570\",\"md5\":\"b8e777fe775302b40e0a8f95a411ccd1\",\"ipad_package_md5\":\"a606f8cc02537f55a1baae84f43fd9d3\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"Maldives\",\"address\":\" \",\"phone\":\"\",\"level\":\"--\",\"website\":\"\",\"visa_level\":\"3\",\"abs_desc\":\"全球顶级的海岛度假圣地，哪怕只是惊鸿一瞥，她都会令你难以忘记。当你乘坐的飞机冲出云层，耀眼的白沙岛和绿宝石般的礁湖就会一下子呈现在你眼前。等不及飞机降落，你就会坚信，这里就是天堂。\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"0823dd54564e92580da57ba49c82d158cdbf4ee3\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":768,\\\"size\\\":211865}\",\"full_url\":\"http://e.hiphotos.baidu.com//lvpics/w%3D300/sign=f2716bb67cd98d1076d40a31113eb807/0823dd54564e92580da57ba49c82d158cdbf4ee3.jpg\"},\"abs_desc\":\"全球顶级的海岛度假圣地，哪怕只是惊鸿一瞥，她都会令你难以忘记。当你乘坐的飞机冲出云层，耀眼的白沙岛和绿宝石般的礁湖就会一下子呈现在你眼前。等不及飞机降落，你就会坚信，这里就是天堂。\",\"level\":\"5\"},{\"sid\":\"d7e376b3690f23d1dc24bbfb\",\"surl\":\"hanguo\",\"sname\":\"韩国\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"776761\",\"cid\":\"1\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"d45964f842d9792d1f58d97d\",\"ext\":{\"sid\":\"d7e376b3690f23d1dc24bbfb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"2405\",\"map_x\":\"14118663.980019\",\"map_y\":\"4490752.8334306\",\"map_info\":\"126.822313,37.550837\",\"going_count\":\"1934\",\"gone_count\":\"420\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"Korea\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"大海、海鲜、美食、美女、湖泊、雪景，古刹、高塔，shopping、散步，韩国的关键词无法一一列举，让韩流把你刮进来吧。\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"d043ad4bd11373f0d3b6c7d5a40f4bfbfaed04ea\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":683,\\\"size\\\":495765}\",\"full_url\":\"http://b.hiphotos.baidu.com//lvpics/w%3D300/sign=ce8965a6d100baa1ba2c41bb7711b9b1/d043ad4bd11373f0d3b6c7d5a40f4bfbfaed04ea.jpg\"},\"abs_desc\":\"大海、海鲜、美食、美女、湖泊、雪景，古刹、高塔，shopping、散步，韩国的关键词无法一一列举，让韩流把你刮进来吧。\",\"level\":\"5\"},{\"sid\":\"f836c6adcd2feedcbaf18bfb\",\"surl\":\"riben\",\"sname\":\"日本\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"484735\",\"cid\":\"0\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"f2717532631a2e19fe0c7858\",\"ext\":{\"sid\":\"f836c6adcd2feedcbaf18bfb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"2281\",\"map_x\":\"15551846.397206\",\"map_y\":\"4234154.2180015\",\"map_info\":\"139.696655,35.692995\",\"going_count\":\"1837\",\"gone_count\":\"399\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"Japan\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"2\",\"abs_desc\":\"春观夜樱、夏看碧海、秋见红叶、冬踏落雪。日本在她潮流的外表下，依然保持着传统的模样，准备对来到这里的每一位游客用她那不胜凉花的娇羞道一句，沙扬娜拉。\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"58c3acb78f58f0a330add1f7\",\"ext\":\"{\\\"width\\\":600,\\\"height\\\":364,\\\"size\\\":54114}\",\"full_url\":\"http://h.hiphotos.baidu.com//lvpics/w%3D300/sign=ce755cbb08fa513d51aa6ade0d6c554c/58c3acb78f58f0a330add1f7.jpg\"},\"abs_desc\":\"春观夜樱、夏看碧海、秋见红叶、冬踏落雪。日本在她潮流的外表下，依然保持着传统的模样，准备对来到这里的每一位游客用她那不胜凉花的娇羞道一句，沙扬娜拉。\",\"level\":\"5\"},{\"sid\":\"334845d63412748e363b9dfb\",\"surl\":\"yuenan\",\"sname\":\"越南\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"504238\",\"cid\":\"27\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"08001403e89b108290211141\",\"ext\":{\"sid\":\"334845d63412748e363b9dfb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"869\",\"map_x\":\"11729343.894337\",\"map_y\":\"2423673.3027584\",\"map_info\":\"105.358887,21.391705\",\"going_count\":\"626\",\"gone_count\":\"214\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"Vietnam\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"买一张OPENBUS的车票，来一次纵贯越南南北的旅行，乘坐小船或是公共汽车开始冒险，如果你胆子够大，不妨跳上一辆摩的。\",\"sketch_desc\":\"\",\"more_desc\":\"Խ\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"55a628d15fa2446f9a502741\",\"ext\":\"{\\\"width\\\":800,\\\"height\\\":600,\\\"size\\\":270531}\",\"full_url\":\"http://a.hiphotos.baidu.com//lvpics/w%3D300/sign=7c7f2a9d7bcb0a4685228d395b62f63e/55a628d15fa2446f9a502741.jpg\"},\"abs_desc\":\"买一张OPENBUS的车票，来一次纵贯越南南北的旅行，乘坐小船或是公共汽车开始冒险，如果你胆子够大，不妨跳上一辆摩的。\",\"level\":\"5\"},{\"sid\":\"dbf91bc6adc41efa15d8b7fb\",\"surl\":\"niboer\",\"sname\":\"尼泊尔\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"346409\",\"cid\":\"1\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"f9f7047830da8e000c9b236b\",\"ext\":{\"sid\":\"dbf91bc6adc41efa15d8b7fb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"859\",\"map_x\":\"9500061.5041765\",\"map_y\":\"3191813.4236672\",\"map_info\":\"85.333157,27.699032\",\"going_count\":\"732\",\"gone_count\":\"124\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"Nepal\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"3\",\"abs_desc\":\"在这座喜马拉雅山脚下的国度，穿梭印度教与佛教融合的寺庙中，每天都有人微笑着对你说Namaste。不管徒步或眺望，尼泊尔都能满足你对雪山的所有期待。\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"9358d109b3de9c82b5618fc56c81800a19d84377\",\"ext\":\"{\\\"width\\\":900,\\\"height\\\":600,\\\"size\\\":299226}\",\"full_url\":\"http://e.hiphotos.baidu.com//lvpics/w%3D300/sign=e92942933901213fcf3348dc64e636f8/9358d109b3de9c82b5618fc56c81800a19d84377.jpg\"},\"abs_desc\":\"在这座喜马拉雅山脚下的国度，穿梭印度教与佛教融合的寺庙中，每天都有人微笑着对你说Namaste。不管徒步或眺望，尼泊尔都能满足你对雪山的所有期待。\",\"level\":\"5\"},{\"sid\":\"d649a4211acb2b02abe64ffd\",\"surl\":\"xuliya\",\"sname\":\"叙利亚\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"4567\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"e2c3cce53e093f57a802c237\",\"ext\":{\"sid\":\"d649a4211acb2b02abe64ffd\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"14\",\"map_x\":\"0\",\"map_y\":\"0\",\"map_info\":\"\",\"going_count\":\"12\",\"gone_count\":\"3\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"0\",\"version_id\":\"0\",\"alias\":\"阿拉伯叙利亚共和国\",\"en_sname\":\"Syria\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"b9d8b7014b526c5f1d958390\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":683,\\\"size\\\":89329}\",\"full_url\":\"http://h.hiphotos.baidu.com//lvpics/w%3D300/sign=553cd24f0924ab18e016e73705fbe69a/b9d8b7014b526c5f1d958390.jpg\"},\"abs_desc\":\"\",\"level\":\"3\"},{\"sid\":\"5007715ac511463263cfd1f3\",\"surl\":\"zhongguo\",\"sname\":\"中国\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"1bac7536b8e8ed52f2cad25c\",\"view_count\":\"72931\",\"cid\":\"27\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"1\",\"vid\":\"15a9f4262a8d0b0ef2db6d3f\",\"ext\":{\"sid\":\"5007715ac511463263cfd1f3\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"255\",\"map_x\":\"12958421.864946\",\"map_y\":\"4826697.019291\",\"map_info\":\"116.39985,39.914004\",\"going_count\":\"139\",\"gone_count\":\"133\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"China\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"历史悠久的国度，迈着现代化的步伐前进。这里有优美的自然风光和人文景观，有各色美食，还有热情好客的人民。
\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"35e940df5a84794b495403ab\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":683,\\\"size\\\":140998,\\\"upload_uid\\\":\\\"628388277\\\",\\\"upload_uname\\\":\\\"\\\\u7f8e\\\\u56fd\\\\u5e0c\\\\u814a\\\\u52a0\\\\u62ff\\\\u5927\\\"}\",\"full_url\":\"http://h.hiphotos.baidu.com//lvpics/w%3D300/sign=edc688dfe950352ab16123086343fb1a/35e940df5a84794b495403ab.jpg\"},\"abs_desc\":\"历史悠久的国度，迈着现代化的步伐前进。这里有优美的自然风光和人文景观，有各色美食，还有热情好客的人民。
\",\"level\":\"5\"},{\"sid\":\"e4cd7454b0656bc57594befb\",\"surl\":\"malaixiya\",\"sname\":\"马来西亚\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"610864\",\"cid\":\"0\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"20ade45fc111fb083b194e7e\",\"ext\":{\"sid\":\"e4cd7454b0656bc57594befb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"873\",\"map_x\":\"11320625.8088\",\"map_y\":\"349798.58817292\",\"map_info\":\"101.687279,3.156285\",\"going_count\":\"586\",\"gone_count\":\"266\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"大马\",\"en_sname\":\"Malaysia\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"3\",\"abs_desc\":\"东南亚扼守马六甲海峡的花园国度，纯净的海滩、奇特的海岛、原始的雨林以及现代化的都市组合成了马来文化的发源地。\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"c2bce2032f572ddfd43f7ccf\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":768,\\\"size\\\":255661}\",\"full_url\":\"http://f.hiphotos.baidu.com//lvpics/w%3D300/sign=cbd45cb8ce1b9d168ac79c61c3deb4eb/c2bce2032f572ddfd43f7ccf.jpg\"},\"abs_desc\":\"东南亚扼守马六甲海峡的花园国度，纯净的海滩、奇特的海岛、原始的雨林以及现代化的都市组合成了马来文化的发源地。\",\"level\":\"5\"},{\"sid\":\"24e6eb69e222608cbb0ea3fb\",\"surl\":\"chaoxian\",\"sname\":\"朝鲜\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"157388\",\"cid\":\"1\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"abfdd3c8b66dad344e8b5141\",\"ext\":{\"sid\":\"24e6eb69e222608cbb0ea3fb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"328\",\"map_x\":\"14008124.573061\",\"map_y\":\"4693506.8209159\",\"map_info\":\"125.829163,38.987168\",\"going_count\":\"232\",\"gone_count\":\"86\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"North Korea\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"对于外界来说这是一个有些神秘的地方，而生活在这里的人们，不过是在将军的怀抱中幸福的活着——带着全民族的信仰“狂言”理想。\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"808a27db7f13af31d1164ee3\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":768,\\\"size\\\":101024}\",\"full_url\":\"http://b.hiphotos.baidu.com//lvpics/w%3D300/sign=50cb41665c6034a829e2be81fb1249d9/808a27db7f13af31d1164ee3.jpg\"},\"abs_desc\":\"对于外界来说这是一个有些神秘的地方，而生活在这里的人们，不过是在将军的怀抱中幸福的活着——带着全民族的信仰“狂言”理想。\",\"level\":\"4\"}]}}}','method'=>'GET'),
    array('aid'=>38,'url'=>'$content-2013','module_name'=>'scene','description'=>'$content目的地改版','params'=>'{
    \"traffic\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\",
        \"article\": [
            {
                \"name\": \"\",
                \"name#\": \"文章描述\",
                \"url\": \"\",
                \"url#\": \"url地址\"
            }
        ],
        \"article#\": \"文章\",
        \"remote\": [
            {
                \"name\": \"\",
                \"name#\": \"交通方式\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\",
                \"ext\": \"图片的ext信息\",
                \"totalDetail\":\"\",
                \"totalDeatail#\":\"文章总描述\",
                \"richTextDesc\":[
                    {
                        \"title\": \"\",
                        \"title#\": \"文章标题\",
                        \"desc\": \"\",
                        \"desc#\": \"文章简要描述\",
                        \"content\": \"\",
                        \"content#\": \"文章内容\",
                        \"tip\": \"\",
                        \"tip#\": \"文章小贴士\",
                        \"level\":\"\",
                        \"level#\":\"几级文章标题\"
                    }
                ],
                \"richTextDesc#\": \"按标题分类的详细信息\"                
            }
        ],
        \"remote#\": \"固定板块-到达与离开\",
        \"local\": [
            {
                \"name\": \"\",
                \"name#\": \"交通方式\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\",
                \"ext\": \"图片的ext信息\",
                \"totalDetail\":\"\",
                \"totalDeatail#\":\"文章总描述\",
                \"richTextDesc\":[
                    {
                        \"title\": \"\",
                        \"title#\": \"文章标题\",
                        \"desc\": \"\",
                        \"desc#\": \"文章简要描述\",
                        \"content\": \"\",
                        \"content#\": \"文章内容\",
                        \"tip\": \"\",
                        \"tip#\": \"文章小贴士\",
                        \"level\":\"\",
                        \"level#\":\"几级文章标题\"
                    }
                ],
                \"richTextDesc#\": \"按标题分类的详细信息\"
            }
        ],
        \"local#\": \"固定板块-本地交通\",
        \"near\": {
            \"nearbus\": \"附近公交站\",
            \"nearsubway\": \"附近地铁站\"
        },
        \"near#\": \"附近\"
    },
    \"traffic#\": \"内页-交通\",
    \"dining\": {
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\",
        \"article\": [
            {
                \"name\": \"\",
                \"name#\": \"文章描述\",
                \"url\": \"\",
                \"url#\": \"url地址\"
            }
        ],
        \"article#\": \"文章\",
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"food\": [
            {
                \"name\": \"条目名称\",
                \"desc\": \"详细信息\",
                \"pic_url\": \"图片url\",
                \"pic_id\": \"图片id\",
                \"ext\": \"图片的额外信息\",
                \"type_tag\": \"42数字类型\",
                \"type_tag#\": \"热门标签类型\",
                \"hot_tag\": [],
                \"hot_tag_content\": \"热门程度\",
                \"restaurants\": [
                    \"5ae22bb1a1344c9130041d40\"
                ],
                \"restaurants#\": \"关联的餐馆\"
            }
        ],
        \"food#\": \"固定板块-小吃\"
    },
    \"dining#\": \"内页-美食\",
    \"accommodation\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\",
        \"article\": [
            {
                \"name\": \"\",
                \"name#\": \"文章描述\",
                \"url\": \"\",
                \"url#\": \"url地址\"
            }
        ],
        \"article#\": \"文章\",
        \"area\": [
            {
                \"name\": \"\",
                \"name#\": \"住宿区域\",
                \"desc\": \"\",
                \"desc#\": \"详细介绍\",
                \"hotels\": [],
                \"hotels#\": \"关联的酒店id\"
            }
        ],
        \"area#\": \"固定板块-住宿区域\"
    },
    \"accommodation#\": \"内页-住宿\",
    \"shopping\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\",
        \"article\": [
            {
                \"name\": \"\",
                \"name#\": \"文章描述\",
                \"url\": \"\",
                \"url#\": \"url地址\"
            }
        ],
        \"article#\": \"文章\",
        \"goods\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ],
        \"goods#\": \"固定板块-特色商品\",
        \"business\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ],
        \"business#\": \"固定板块-热门商业街\"
    },
    \"shopping#\": \"内页-购物\",
    \"entertainment\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\",
        \"article\": [
            {
                \"name\": \"\",
                \"name#\": \"文章描述\",
                \"url\": \"\",
                \"url#\": \"url地址\"
            }
        ],
        \"article#\": \"文章\",
        \"activity\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ],
        \"activity#\": \"固定板块-玩什么\",
        \"where\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ],
        \"where#\": \"固定板块-在哪玩\"
    },
    \"entertainment#\": \"内页-活动\",
    \"attention\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\",
        \"article\": [
            {
                \"name\": \"\",
                \"name#\": \"文章描述\",
                \"url\": \"\",
                \"url#\": \"url地址\"
            }
        ],
        \"article#\": \"文章\",
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ]
    },
    \"attention#\": \"内页-小贴士【注意事项+之前的useful】\",
    \"leave_info\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\",
        \"article\": [
            {
                \"name\": \"\",
                \"name#\": \"文章描述\",
                \"url\": \"\",
                \"url#\": \"url地址\"
            }
        ],
        \"article#\": \"文章\",
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ]
    },
    \"leave_info#\": \"内页-出境信息\",
    \"new_geography_history\": {
        \"desc\": \"\",
        \"desc#\": \"概述\",
        \"extra\": [
            {
                \"name\": \"\",
                \"name#\": \"其他\",
                \"url\": \"\",
                \"url#\": \"其他-url\"
            }
        ],
        \"extra#\": \"其他\",
        \"article\": [
            {
                \"name\": \"\",
                \"name#\": \"文章描述\",
                \"url\": \"\",
                \"url#\": \"url地址\"
            }
        ],
        \"article#\": \"文章\",
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"条目名称\",
                \"desc\": \"\",
                \"desc#\": \"详细信息\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ]
    },
    \"new_geography_history#\": \"内页-文化地理-server使用\",
    \"new_line\": {
        \"desc\": \"\",
        \"desc#\": \"全部路线描述\",
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"路线名称\",
                \"desc\": \"\",
                \"desc#\": \"路线详细描述\",
                \"path\": [
                    {
                        \"path\": [
                            \"surl\"
                        ],
                        \"desc\": \"\",
                        \"desc#\": \"途经描述\",
                        \"repeat_times\": \"\",
                        \"nickname_path\": {},
                        \"dinning\": \"\",
                        \"accordination\": \"\",
                        \"tips\": \"\",
                        \"tdyou_sid\": \"已废弃\",
                        \"pic_url\": \"\",
                        \"pic_id\": \"\",
                        \"ext\": {}
                    }
                ],
                \"path#\": \"途经地\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\",
                \"ext\": \"\",
                \"keyword\": \"\",
                \"bigPath\": \"\",
                \"recommend\": \"\",
                \"recommend#\": \"标记是否为推荐路线0/1\"
            }
        ]
    },
    \"new_line#\": \"内页-路线【新】-需要翠姐重新整理\",
    \"small_line\": {
        \"desc\": \"\",
        \"desc#\": \"全部路线描述\",
        \"tdyou\": \"废弃\",
        \"tdyou_scene_id\": \"812废弃\",
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"路线名称\",
                \"desc\": \"\",
                \"desc#\": \"路线详细描述\",
                \"path\": [
                    {
                        \"path\": [
                            \"surl\"
                        ],
                        \"desc\": \"\",
                        \"desc#\": \"途经描述\",
                        \"repeat_times\": \"废弃\",
                        \"dinning\": \"\",
                        \"accordination\": \"\",
                        \"tips\": \"\",
                        \"tdyou_sid\": \"废弃\",
                        \"pic_url\": \"\",
                        \"pic_id\": \"\",
                        \"ext\": {},
                        \"mapType\": \"3dyou【数据待定】\",
                        \"tdyouSceneId\": \"812\"
                    }
                ],
                \"path#\": \"途经地\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\",
                \"ext\": \"\",
                \"keyword\": \"\",
                \"recommend\": \"\",
                \"recommend#\": \"标记是否为推荐路线0/1\"
            }
        ]
    },
    \"small_line#\": \"内页-小线路\",
    \"highlight\": {
        \"list\": [
            \"6609c93d70cf3bc7d176898ad000baa1cd112a65\"
        ],
        \"list#\": \"亮点排序很据所在数组元素的顺序,元素为pic_url\"
    },
    \"highlight#\": \"首页-亮点排序\",
    \"map_album\": {
        \"list\": [
            \"6609c93d70cf3bc7d176898ad000baa1cd112a65\"
        ]
    },
    \"news\": {
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"标题\",
                \"url\": \"\",
                \"url#\": \"地址\",
                \"end_time\": \"2012-03-10\",
                \"end_time#\": \"截止时间\"
            }
        ]
    },
    \"news#\": \"首页-实时旅讯\",
    \"na_news\": {
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"标题\",
                \"url\": \"\",
                \"url#\": \"地址\",
                \"end_time\": \"2012-03-10\",
                \"end_time#\": \"截止时间\"
            }
        ]
    },
    \"na_news#\": \"NA实时旅讯\",
    \"video\": {
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"标题\",
                \"code\": \"\",
                \"code#\": \"视频代码\",
                \"pic_url\": {},
                \"pic_url#\": \"视频封面图片\",
                \"pic_id\": {},
                \"pic_id#\": {}
            }
        ]
    },
    \"video#\": \"首页-视频\",
    \"around_map\": {
        \"center\": {
            \"lat\": 39.914004,
            \"lat#\": \"中心坐标\",
            \"lng\": 116.39985,
            \"lng#\": \"中心坐标\"
        },
        \"center#\": \"地图中心点坐标\",
        \"zoom\": 19,
        \"zoom#\": \"地图缩放比例\"
    },
    \"around_map#\": \"首页-周边地图\",
    \"around_scene\": {
        \"list\": [
            \"cc11463263cf7ae3b9d4dff3\"
        ],
        \"list#\": \"周边景点sid列表\"
    },
    \"around_scene#\": \"首页-周边景点\",
    \"relate_scene\": {
        \"list\": [
            \"cc11463263cf7ae3b9d4dff3\"
        ],
        \"list#\": \"相关景点sid列表\"
    },
    \"relate_scene#\": \"首页-相关景点\",
    \"partner\": {
        \"list\": [
            {
                \"name\": \"\",
                \"name#\": \"名称\",
                \"url\": \"\",
                \"url#\": \"网络地址\",
                \"pic_url\": \"\",
                \"pic_url#\": \"图片url\",
                \"pic_id\": \"\",
                \"pic_id#\": \"图片id\"
            }
        ]
    },
    \"partner#\": \"首页-合作机构\",
    \"guide\": {
        \"list\": [
            \"4fec4414f7ea812e5e7d8cd5\"
        ]
    },
    \"guide#\": \"路书配置\",
    \"besttime\": {
        \"simple_desc\": \"精简版描述\",
        \"more_desc\": \"详细版描述\",
        \"recommend_visit_time\": \"推荐旅游时间\",
        \"month\": [
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
            12
        ]
    },
    \"besttime#\": \"最佳旅游时节\",
    \"order\": {
        \"list\": [
            \"culturalgeography\",
            \"map\",
            \"entertainment\",
            \"path\",
            \"besttime\",
            \"traffic\",
            \"accommodation\",
            \"dining\",
            \"shopping\",
            \"playproject\",
            \"attention\",
            \"leaveinfo\",
            \"useful\",
            \"attention\",
            \"leaveinfo\",
            \"useful\"
        ]
    },
    \"order_na\": {
        \"show\": [
            \"highlight\",
            \"leave_info\",
            \"traffic.remote\",
            \"top_scene\",
            \"dining\",
            \"accommodation\",
            \"shopping\",
            \"new_line\",
            \"entertainment\",
            \"traffic.local\",
            \"attention\"
        ],
        \"hide\": [
            \"abs\",
            \"traffic\",
            \"ticket\"
        ]
    },
    \"ticket_info\": {
        \"price_desc\": \"精简版门票价格\",
        \"price_list\": [
            {
                \"name\": \"\",
                \"desc\": \"\"
            }
        ],
        \"price_list#\": \"详细版门票价格\",
        \"open_time_desc\": \"精简版开放时间\",
        \"open_time_list\": [
            {
                \"name\": \"\",
                \"desc\": \"\"
            }
        ],
        \"opoen_time_list#\": \"详细版开放时间\",
        \"attention\": [
            {
                \"name\": \"\",
                \"desc\": \"\"
            }
        ],
        \"attention#\": \"门票注意事项\"
    },
    \"ticket_info#\": \"首页-门票信息\",
    \"weather\": {
        \"pc\": {
            \"is_shown\": \"1\",
            \"wid\": \"127\",
            \"wid#\": \"中国天气网城市对应id\"
        },
        \"na\": {
            \"is_shown\": \"1\",
            \"wid\": \"123456\",
            \"wid#\": \"中国天气网城市对应id\"
        }
    },
    \"weather#\": \"天气信息\",
    \"tieba_cooperation\": {
        \"list\":[
            {
                \"name\": \"\",
                \"url\": \"\"
            }
        ]
    },
    \"bright#\": \"不可错过的亮点\",
    \"bright\": {
        \"desc\": \"总体描述\",
        \"local#\": \"亮点列表\",
        \"local\": [
            {
                \"name\": \"亮点的名字\",
                \"desc\": \"亮点的描述\",
                \"surl\": \"beijing\",
                \"sname\": \"景点名\",
                \"pic_url\": \"图片的pic_url\",
                \"pic_id\": \"图片的id\",
                \"ext\": {
                    \"width\": \"宽度\",
                    \"height\": \"高度\",
                    \"size\": \"图片大小\",
                    \"upload_uid\": \"上传者的id\",
                    \"upload_uname\": \"上传者的名字\"
                }
            }
        ]
    },
    \"scene_pictures\":{
        \"list\":[
            \"78310a55b319ebc4d036d67b8226cffc1f171681\"
        ]
    }
}','response'=>'{}','method'=>'GET'),
    array('aid'=>39,'url'=>'/business/ajax/hotel/search','module_name'=>'common','description'=>'酒店预定','params'=>'{\"checkin_time\":\"2013-07-27\",\"leave_time\":\"2013-07-28\",\"sid\":\"\",\"price[]\":\"0,150 //价格范围\",\"star_type[]\":\"1 //星级\",\"brands[]\":\"如家快捷 //品牌\",\"area\":\"商圈-崇文门商圈\",\"rn\":15,\"order_by\":\"0从低往高 1从高往低\",\"sort\":\"0默认 1口碑 2价格\",\"s\":1374045992992}','response'=>'{\"errno\":0,\"msg\":\"\",\"data\":{\"query\":{\"sid\":0,\"sname\":\"北京\",\"checkin_time\":\"2013-07-27\",\"leave_time\":\"2013-07-28\",\"pn\":0,\"rn\":0},\"page\":{\"pn\":0,\"total\":4464},\"hashcode\":\"\",\"total\":4464,\"area\":{\"商圈\":[{\"type\":\"\",\"value\":{\"中关村、上地\":\"中关村、上地\",\"亚运村\":\"亚运村\",\"公主坟商圈\":\"公主坟商圈\",\"劲松潘家园\":\"劲松潘家园\",\"北京南站商圈\":\"北京南站商圈\",\"后海商圈\":\"后海商圈\",\"老国展商圈\":\"老国展商圈\",\"天安门王府井\":\"天安门王府井\",\"崇文门商圈\":\"崇文门商圈\",\"工体商圈\":\"工体商圈\",\"望京\":\"望京\",\"朝青商圈\":\"朝青商圈\",\"燕莎国贸\":\"燕莎国贸\",\"西单商圈\":\"西单商圈\",\"西客站商圈\":\"西客站商圈\",\"西直门\":\"西直门\",\"首都机场\":\"首都机场\",\"马甸安贞商圈\":\"马甸安贞商圈\"}}],\"行政区\":[{\"type\":\"行政区\",\"value\":{\"东城区\":\"东城区\",\"西城区\":\"西城区\",\"朝阳区\":\"朝阳区\",\"丰台区\":\"丰台区\",\"石景山区\":\"石景山区\",\"海淀区\":\"海淀区\",\"门头沟区\":\"门头沟区\",\"房山区\":\"房山区\",\"通州区\":\"通州区\",\"顺义区\":\"顺义区\",\"昌平区\":\"昌平区\",\"大兴区\":\"大兴区\",\"怀柔区\":\"怀柔区\",\"平谷区\":\"平谷区\",\"密云县\":\"密云县\",\"延庆县\":\"延庆县\"}}],\"观光景点\":[{\"type\":\"观光景点\",\"value\":{\"天安门\":\"天安门\",\"故宫\":\"故宫\",\"颐和园\":\"颐和园\",\"天坛\":\"天坛\",\"王府井\":\"王府井\",\"前门大街\":\"前门大街\",\"后海\":\"后海\",\"三里屯\":\"三里屯\",\"鼓楼\":\"鼓楼\",\"南锣鼓巷\":\"南锣鼓巷\",\"什刹海\":\"什刹海\",\"欢乐谷\":\"欢乐谷\",\"雍和宫\":\"雍和宫\",\"恭王府\":\"恭王府\",\"北京动物园\":\"北京动物园\",\"北京植物园\":\"北京植物园\",\"北海公园\":\"北海公园\",\"香山公园\":\"香山公园\",\"玉渊潭公园\":\"玉渊潭公园\",\"首都博物馆\":\"首都博物馆\",\"鸟巢\":\"鸟巢\",\"798艺术区\":\"798艺术区\",\"圆明园\":\"圆明园\",\"慕田峪长城\":\"慕田峪长城\"}}]},\"levels\":[{\"name\":\"经济型\",\"value\":\"1\",\"count\":683},{\"name\":\"三星级/舒适\",\"value\":\"2\",\"count\":497},{\"name\":\"四星级/高档\",\"value\":\"3\",\"count\":359},{\"name\":\"五星级/豪华\",\"value\":\"4\",\"count\":159},{\"name\":\"二星级/其他\",\"value\":\"0,5\",\"count\":2766}],\"brands\":[{\"name\":\"如家快捷\",\"value\":\"rujia\",\"count\":131},{\"name\":\"7天连锁\",\"value\":\"qitian\",\"count\":130},{\"name\":\"汉庭酒店\",\"value\":\"hanting\",\"count\":92},{\"name\":\"速8\",\"value\":\"su8\",\"count\":82},{\"name\":\"格林豪泰\",\"value\":\"gelinhaotai\",\"count\":54},{\"name\":\"锦江之星\",\"value\":\"jinjiangzhixing\",\"count\":43},{\"name\":\"99连锁\",\"value\":\"99inn\",\"count\":34},{\"name\":\"欣燕都\",\"value\":\"xinyandu\",\"count\":20},{\"name\":\"布丁\",\"value\":\"buding\",\"count\":13},{\"name\":\"锦江酒店\",\"value\":\"jinjiangjiudian\",\"count\":12},{\"name\":\"飘HOME\",\"value\":\"piaohome\",\"count\":11},{\"name\":\"桔子酒店\",\"value\":\"juzi\",\"count\":11},{\"name\":\"国际青年旅舍\",\"value\":\"guojiqinglv\",\"count\":10},{\"name\":\"山水时尚\",\"value\":\"shanshuishishang\",\"count\":9},{\"name\":\"E短租\",\"value\":\"eduanzu\",\"count\":9},{\"name\":\"金泰之家\",\"value\":\"jintaizhijia\",\"count\":8},{\"name\":\"海友酒店\",\"value\":\"haiyou\",\"count\":8},{\"name\":\"首旅建国\",\"value\":\"shoulvjianguo\",\"count\":8},{\"name\":\"全季酒店\",\"value\":\"quanji\",\"count\":7},{\"name\":\"假日\",\"value\":\"jiari\",\"count\":7},{\"name\":\"智选假日\",\"value\":\"zhixuanjiari\",\"count\":7},{\"name\":\"莫泰\",\"value\":\"motai\",\"count\":6},{\"name\":\"皇冠假日\",\"value\":\"huangguanjiari\",\"count\":6},{\"name\":\"戴斯\",\"value\":\"daisi\",\"count\":5},{\"name\":\"宜必思\",\"value\":\"yibisi\",\"count\":5},{\"name\":\"富驿商旅\",\"value\":\"fuyishanglv\",\"count\":4},{\"name\":\"安心\",\"value\":\"anxin\",\"count\":4},{\"name\":\"百时快捷\",\"value\":\"baishi\",\"count\":4},{\"name\":\"富驿时尚\",\"value\":\"fuyi\",\"count\":4},{\"name\":\"禧龙\",\"value\":\"xilong\",\"count\":4},{\"name\":\"中安之家\",\"value\":\"zhonganzhijia\",\"count\":4},{\"name\":\"易佰\",\"value\":\"yibai\",\"count\":4},{\"name\":\"瑞廷\",\"value\":\"ruiting\",\"count\":4},{\"name\":\"世纪金源\",\"value\":\"shijijinyuan\",\"count\":3},{\"name\":\"凯莱\",\"value\":\"kailai\",\"count\":3},{\"name\":\"星程\",\"value\":\"xingcheng\",\"count\":3},{\"name\":\"香格里拉\",\"value\":\"xianggelila\",\"count\":3},{\"name\":\"丽亭\",\"value\":\"liting\",\"count\":3},{\"name\":\"尚客优\",\"value\":\"shangke\",\"count\":3},{\"name\":\"雅悦\",\"value\":\"yayue\",\"count\":3},{\"name\":\"诺富特\",\"value\":\"nuofute\",\"count\":3},{\"name\":\"桔子水晶\",\"value\":\"juzishuijing\",\"count\":3},{\"name\":\"希尔顿\",\"value\":\"xierdun\",\"count\":3},{\"name\":\"威斯汀\",\"value\":\"weisiting\",\"count\":2},{\"name\":\"开元名都\",\"value\":\"kaiyuanmingdu\",\"count\":2},{\"name\":\"美居\",\"value\":\"meiju\",\"count\":2},{\"name\":\"盛贸\",\"value\":\"shengmao\",\"count\":2},{\"name\":\"丽思卡尔顿\",\"value\":\"lisikaerdun\",\"count\":2},{\"name\":\"维景国际\",\"value\":\"weijingguoji\",\"count\":2},{\"name\":\"华美达\",\"value\":\"huameida\",\"count\":2},{\"name\":\"维也纳\",\"value\":\"weiyena\",\"count\":2},{\"name\":\"喜来登\",\"value\":\"xilaideng\",\"count\":2},{\"name\":\"万丽\",\"value\":\"wanli\",\"count\":2},{\"name\":\"铂尔曼\",\"value\":\"boerman\",\"count\":2},{\"name\":\"最佳西方\",\"value\":\"zuijiaxifang\",\"count\":2},{\"name\":\"洲际\",\"value\":\"zhouji\",\"count\":2},{\"name\":\"万豪\",\"value\":\"wanhao\",\"count\":2},{\"name\":\"万豪行政公寓\",\"value\":\"wanhaoxingzheng\",\"count\":2},{\"name\":\"万怡\",\"value\":\"wanyi\",\"count\":1},{\"name\":\"君悦\",\"value\":\"junyue\",\"count\":1},{\"name\":\"金陵连锁\",\"value\":\"jinling\",\"count\":1},{\"name\":\"瑞吉\",\"value\":\"ruiji\",\"count\":1},{\"name\":\"维景\",\"value\":\"weijing\",\"count\":1},{\"name\":\"岭南佳园\",\"value\":\"lingnan\",\"count\":1},{\"name\":\"莱佛士\",\"value\":\"laifushi\",\"count\":1},{\"name\":\"朗豪\",\"value\":\"langhao\",\"count\":1},{\"name\":\"费尔蒙\",\"value\":\"feiermeng\",\"count\":1},{\"name\":\"锐思特连锁\",\"value\":\"ruisite\",\"count\":1},{\"name\":\"丽笙\",\"value\":\"lisheng\",\"count\":1},{\"name\":\"华天\",\"value\":\"ehuatian\",\"count\":1},{\"name\":\"嘉里\",\"value\":\"jiali\",\"count\":1},{\"name\":\"凯宾斯基\",\"value\":\"kaibinsiji\",\"count\":1},{\"name\":\"旅居快捷\",\"value\":\"lvjukuaijie\",\"count\":1},{\"name\":\"希尔顿逸林\",\"value\":\"xierdunyilin\",\"count\":1},{\"name\":\"马哥孛罗\",\"value\":\"mageboluo\",\"count\":1},{\"name\":\"四季\",\"value\":\"siji\",\"count\":1},{\"name\":\"福朋喜来登\",\"value\":\"fupeng\",\"count\":1},{\"name\":\"索菲特\",\"value\":\"suofeite\",\"count\":1},{\"name\":\"如家和颐\",\"value\":\"heyi\",\"count\":1},{\"name\":\"康莱德\",\"value\":\"kanglaide\",\"count\":1},{\"name\":\"旅居\",\"value\":\"lvju\",\"count\":1},{\"name\":\"JW万豪\",\"value\":\"jw\",\"count\":1},{\"name\":\"半岛\",\"value\":\"bandao\",\"count\":1},{\"name\":\"中奥凯富\",\"value\":\"zhongaokaifu\",\"count\":1},{\"name\":\"豪生\",\"value\":\"haosheng\",\"count\":1},{\"name\":\"雅乐轩\",\"value\":\"yalexuan\",\"count\":1},{\"name\":\"城市客栈\",\"value\":\"chengshikezhan\",\"count\":1},{\"name\":\"豪华千禧\",\"value\":\"haohuaqianxi\",\"count\":1},{\"name\":\"粤海酒店\",\"value\":\"yuehai\",\"count\":1},{\"name\":\"安缦\",\"value\":\"anman\",\"count\":1},{\"name\":\"格兰云天\",\"value\":\"gelanyuntian\",\"count\":1},{\"name\":\"美爵\",\"value\":\"meijue\",\"count\":1},{\"name\":\"银座佳驿\",\"value\":\"yinzuojiayi\",\"count\":1},{\"name\":\"凯富\",\"value\":\"kaifu\",\"count\":1},{\"name\":\"柏悦\",\"value\":\"boyue\",\"count\":1},{\"name\":\"丽晶\",\"value\":\"lijing\",\"count\":1}],\"hotels\":[{\"hotel_id\":\"beijing_city_10956\",\"hotel_name\":\"汉庭酒店北京西站南广场店\",\"small_pic\":\"http://userimg.qunar.com/imgs/201212/03/nz078uvc_JrPJg35v240.jpg\",\"large_pic\":\"http://userimg.qunar.com/imgs/201212/03/nz078uvc_JrPJg35v1024.jpg\",\"star\":1,\"starType\":2,\"address\":\"北京市丰台区太平桥东里16号\",\"area\":\"西客站商圈\",\"price\":247,\"refer_price\":246,\"url\":\"http://user.qunar.com/userExt/baiduLBS.jsp?url=http%3A%2F%2Fhotel.qunar.com%2Fcity%2Fbeijing_city%2Fdt-10956%2F%3Fex_track%3Dbd_lvyou_hotel_dtl%26fromDate%3D2013-07-27%26toDate%3D2013-07-28\",\"comment_count\":27,\"comment_rate\":\"3.4\",\"has_group\":0,\"rooms\":[{\"ota_list\":[{\"cn_name\":\"速8酒店官方旗舰店\",\"score\":\"overall_rating.score\",\"ota_logo\":\"http://source.qunar.com/site/images/hotel/wrapperlogo/su8qijiandian.jpg\",\"book_desc\":\"经济单人房\",\"book_url\":\"http://map.baidu.com/detai\",\"price\":\"价格\",\"re_cash\":\"返现\"}],\"name\":\"零压高级大床房\",\"bed_type\":\"\",\"room_area\":\"\",\"price\":271,\"has_broadband\":0,\"is_occupied\":1,\"url\":\"http://user.qunar.com/userExt/baiduLBS.jsp?url=http%3A%2F%2Fhotel.qunar.com%2Fcity%2Fbeijing_city%2Fdt-10956%2F%3Fex_track%3Dbd_lvyou_hotel_room%26fromDate%3D2013-07-27%26toDate%3D2013-07-28%26roomId%3D207015160\"}]}],\"user\":{\"username\":\"LC_treed\",\"uname\":\"LC_treed\",\"uid\":\"92c391ab0d1dff3324d7c4c3\",\"nickname\":\"LC_treed\",\"avatar_source\":\"0\",\"avatar_large\":\"a2cc7cd98d1001e9cdeda6c6b80e7bec55e79722\",\"avatar_middle\":\"ac4bd11373f082023dac2cf64bfbfbedab641b38\",\"avatar_small\":\"d043ad4bd11373f0e401d256a40f4bfbfbed0438\",\"self_introduction\":\"\",\"location_sid\":\"0\",\"location\":\"\",\"preferences\":[],\"is_blocked\":0,\"user_level\":\"0\",\"owner_level\":\"0\",\"admin_level\":\"2\",\"is_audited\":1,\"trust_level\":\"0\",\"score\":\"552\",\"wealth\":\"15\",\"praise_count\":\"0\",\"notes_count\":\"1\",\"notes_count_total\":\"6\",\"recommend_count\":\"6\",\"common_posts_count\":\"15\",\"going_count\":\"7\",\"gone_count\":\"14\",\"version_count\":\"0\",\"create_time\":\"0\",\"update_time\":\"1373967225\",\"last_login_time\":\"1374027524\",\"recommend_notes_count\":\"3\",\"travel_count\":\"0\",\"travel_posts_count\":\"0\",\"travel_replys_count\":\"0\",\"foot_print_count\":\"6\",\"trip_route_count\":\"1\",\"be_recommended_count\":\"0\",\"favorite_count\":\"18\",\"pic_travel_count\":13,\"is_admin\":1,\"is_owner\":0,\"is_daren\":0,\"is_famous\":0,\"is_reply_trust\":0,\"has_login_record\":1,\"app_has_login_record\":0,\"reply_day_count\":\"0\",\"is_activated\":1,\"has_uname\":1,\"is_bindemail\":1,\"usersource\":0,\"is_bundle\":0,\"login_src\":0,\"bdstoken\":\"72ec52b5da0d67dac0dd56be5ac1b561\",\"is_login\":1}}}','method'=>'GET'),
    array('aid'=>40,'url'=>'/url','module_name'=>'mis','description'=>'【同步】目的地住宿内页，预定tab展示','params'=>'{}','response'=>'{
    \"booking_tab_config\": [
        {
            \"sid\" :\"\",
            \"sname\":\"\",
            \"surl\":\"\",
            \"default_booking_tab\": 1
        }
    ]
}','method'=>'GET'),
    array('aid'=>41,'url'=>'/mis/url','module_name'=>'mis','description'=>'【异步】目的地住宿内页，预定tab提交','params'=>'{
    \"booking_tab_config\": [
        {
            \"sid\" :\"\",
            \"default_booking_tab\": 1
        }
    ]
    }','response'=>'{}','method'=>'POST'),
    array('aid'=>42,'url'=>'/mapid','module_name'=>'mis','description'=>'【同步】目的地id与地图匹配','params'=>'{
    \"map_sid_list\": [
        {
            \"sid\" :\"\",
            \"sname\":\"\",
            \"surl\":\"\",
            \"sscode\": \"地图对应id\"
        }
    ]
}','response'=>'','method'=>'GET'),
    array('aid'=>43,'url'=>'/surl','module_name'=>'mis','description'=>'【异步】目的地id与地图匹配','params'=>'{\"booking_tab_config\":[{\"sid\":\"\",\"sscode\":1}]}','response'=>'{}','method'=>'POST'),
    array('aid'=>44,'url'=>'http://log.baidu.com/?a=AjaxGetJobList','module_name'=>'LOG平台','description'=>'根据产品线id获取统计列表','params'=>'{
    \"m\":\"Job\",
    \"a\":\"AjaxGetJobList\",
    \"pid\":\"308\"
    }','response'=>'[
    {\"id\":\"统计列表的id\",
    \"name\":\"统计列表的名字\"}]','method'=>'GET'),
    array('aid'=>45,'url'=>'http://log.baidu.com/?a=AjaxGetJobOutputInfo','module_name'=>'LOG平台','description'=>'根据统计列表的id获取统计项的详细信息','params'=>'{
                \"m\":\"Job\",
            \"a\":\"AjaxGetJobOutputInfo\",
            \"id\":\" item\"
    }','response'=>'{
    \"resource_id\": \"241340\",
    \"english_name\": \"webapp_type_2019\",
    \"chinese_name\": \"最佳旅游时间pv\",
    \"product_id\": \"39\",
    \"description\": \"\",
    \"schema\": \"\",
    \"idl\": \"\",
    \"resource_type\": \"2\",
    \"ddbs_projection\": \"0\",
    \"run_cycle\": \"1440\",
    \"save_period\": \"3\",
    \"priority\": \"8\",
    \"security_level\": \"0\",
    \"create_time\": \"2012-05-02 10:57:39\",
    \"create_user\": \"yixiao01\",
    \"lastModify_time\": \"2013-06-27 18:27:02\",
    \"lastModify_user\": \"chenzheng03\",
    \"manifest\": \"0\",
    \"res_size\": \"0\",
    \"res_count\": \"0\",
    \"file_count\": \"0\",
    \"jobid\": \"13020\"
}','method'=>'GET'),
    array('aid'=>46,'url'=>'http://log.baidu.com/?m=Job&a=AjaxGetJobOutputList&jobid=13020','module_name'=>'LOG平台','description'=>'根据统计的id获取统计项列表','params'=>'{
    \"m\": \"Job\",
    \"a\":\"AjaxGetJobOutputList\",
    \"jobid\":\"13020\"
    }','response'=>'[
    {
        \"id\": \"517954\",
        \"name\": \"webapp_pv_plandetail\",
        \"cnname\": \"webapp计划页总pv\",
        \"priority\": \"8\",
        \"type\": \"2\"
    }
]','method'=>'GET'),
    array('aid'=>47,'url'=>'/tuangou','module_name'=>'scene','description'=>'住宿团购接口','params'=>'{
    \"map_sid\":\"\"
    }','response'=>'{
    \"hotel_list\":[{
        \"name\": \"北京朝阳酒店\",
        \"url\": \"团购地址\",
        \"pic_url\":\"\",
        \"area\":\"商圈\",
        \"level\":\"星级\",
        \"price\":\"\",
        \"original_price\":\"原价\",
        \"discount\":\"6.7折\"
        }]
    }','method'=>'GET'),
    array('aid'=>48,'url'=>'/destination/basicedit/','module_name'=>'destination','description'=>'目的地基本信息编辑页','params'=>'{\"surl\":\"目的地拼音\",\"module\":\"模块\"}','response'=>'{\"errno\":\"0\",\"msg\":\"\",\"user\":{},\"scene\":{\"sid\":\"795ac511463263cf7ae3def3\",\"surl\":\"beijing\",\"sname\":\"北京\",\"parent_sid\":\"5007715ac511463263cfd1f3\",\"cid\":\"1\",\"scene_layer\":\"4\",\"scene_type\":\"景点类型\",\"map_info\":\"坐标信息\",\"tpl_id\":\"模板类型\",\"tpl_version\":\"理想版/过渡版\",\"alias\":\"别名\",\"en_sname\":\"英文名\",\"address\":\"\",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"\",\"abs_desc\":\"\",\"sketch_desc\":\"\",\"more_desc\":\"\"},\"cid_map\":{\"4\":\"城市\"}}','method'=>'GET'),
    array('aid'=>49,'url'=>'/destination/ajax/save/basicedit/','module_name'=>'destination','description'=>'【异步】目的地基本信息编辑提交','params'=>'{
    \"sid\":\"\",
    \"module\":\"\",
    \"sname\": \"北京\",
    \"parent_sid\": \"5007715ac511463263cfd1f3\",
    \"cid\": \"景点类型\",
    \"scene_layer\": \"4\",
    \"map_info\":\"116.39985,39.914004\",
    \"tpl_id\": \"模板类型\",
    \"alias\": \"别名\",
    \"en_sname\": \"英文名\",
    \"address\": \"\",
    \"phone\": \"\",
    \"level\": \"\",
    \"website\": \"\",
    \"visa_level\": \"\",
    \"abs_desc\": \"\",
    \"sketch_desc\": \"\",
    \"more_desc\": \"\"
}','response'=>'{
    \"errno\": \"0\",
    \"errmsg\": \"\",
    \"data\":{}
}','method'=>'POST'),
    array('aid'=>50,'url'=>'/destination/edit/?surl=beijing&module=highlight&page=main','module_name'=>'destination','description'=>'目的地内容编辑页','params'=>'{\"surl\":\"目的地拼音\",\"module\":\"模块\",\"page\":\"前端参数\"}','response'=>'{\"errno\":\"0\",\"msg\":\"\",\"user\":{},\"scene\":{\"sid\":\"795ac511463263cf7ae3def3\",\"surl\":\"beijing\",\"sname\":\"北京\",\"parent_sid\":\"5007715ac511463263cfd1f3\",\"cid\":\"1\",\"scene_layer\":\"4\",\"ext\":{\"sid\":\"795ac511463263cf7ae3def3\",\"map_info\":\"\",\"tpl_id\":\"模板类型\",\"tpl_version\":\"模版版本\",\"alias\":\"别名\",\"en_sname\":\"英文名\",\"address\":\"\",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"\",\"abs_desc\":\"\",\"sketch_desc\":\"\",\"more_desc\":\"\"}},\"$module\":{},\"$module#\":\"模块内容参考http://lvyoux.newoffline.bae.baidu.com/api/38\"}','method'=>'GET'),
    array('aid'=>51,'url'=>'/destination/ajax/save/delete/','module_name'=>'destination','description'=>'【异步】目的地内容删除','params'=>'{\"scid\":\"目的地内容id\",\"module\":\"traffic\",\"sub_module\":\"local\"}','response'=>'{\"errno\":\"0\",\"errmsg\":\"\",\"data\":{}}','method'=>'POST'),
    array('aid'=>52,'url'=>'/destination/ajax/save/edit/','module_name'=>'destination','description'=>'【异步】目的地内容模块编辑','params'=>'{
    \"sid\": \"\",
    \"module\": \"attention\",
    \"module#\":\"以小贴士为例\",
    \"content\":{
        \"desc\": \"\",
        \"extra\": [
            {
                \"scid\": \"44250b158915309ea1716935\",
                \"name\": \"其他\",
                \"url\": \"\"
            }
        ],
        \"article\": [
            {
                \"scid\": \"44250b158915309ea1716935\",
                \"name\": \"文章描述\",
                \"url\": \"\"
            }
        ],
        \"list\": [
            {
                \"scid\": \"44250b158915309ea1716935\",
                \"name\": \"条目名称\",
                \"desc\": \"\",
                \"pic_url\": \"\",
                \"pic_id\": \"\"
            },
            {
                \"scid\": \"0表示新增的条目\",
                \"name\": \"条目名称\",
                \"desc\": \"\",
                \"pic_url\": \"\",
                \"pic_id\": \"\"
            }
        ]

    }
}','response'=>'{
    \"errno\": \"0\",
    \"errmsg\": \"\",
    \"data\": {}
}','method'=>'POST'),
    array('aid'=>53,'url'=>'/scene/content','module_name'=>'scene','description'=>'【旧】content','params'=>'{}','response'=>'{
    \"info\": {
		\"abstract\": \"\\u8868\\u9762\\u4e0a\\u5b83\\u662f\\u73b0\\u4ee3\\u5927\\u90fd\\u4f1a\\uff0c\\u4f46\\u5185\\u5fc3\\u5374\\u6709\\u62b9\\u4e0d\\u53bb\\u7684\\u53e4\\u6734\\u548c\\u6000\\u65e7\\u3002\\u95f2\\u5ead\\u4fe1\\u6b65\\u5728\\u9010\\u6e10\\u5c11\\u53bb\\u7684\\u80e1\\u540c\\u91cc\\uff0c\\u8d70\\u8fdb\\u90a3\\u70ed\\u6c14\\u817e\\u817e\\u7684\\u6dae\\u8089\\u5e97\\uff0c\\u90a3\\u624d\\u662f\\u771f\\u6b63\\u7684\\u5317\\u4eac\\u3002\",
		\"bdstoken\": \"f192671b5ed1783b50c5fca5eaecade7\",
		\"scene_type\": \"\\u57ce\\u5e02\",
		\"en_sname\": \"Beijing\",
		\"alias\": \"\\u4eac\\uff0cPeking\",
		\"recommend_visit_time\": \"3\\u5929\",
		\"best_visit_time_more\": \"1\",
		\"best_visit_time\": \"\\u5317\\u4eac\\u56db\\u5b63\\u5404\\u6709\\u7279\\u8272\\u3002\\u4e0d\\u8fc79\\u6708-10\\u6708\\u7684\\u5317\\u4eac\\u79cb\\u9ad8\\u6c14\\u723d\\u3001\\u67ab\\u53f6\\u6e10\\u7ea2\\u3001\\u94f6\\u674f\\u94fa\\u8def\\uff0c\\u6b64\\u65f6\\u65c5\\u6e38\\u6700\\u4f73\\u3002\",
		\"arrive_and_leave\": \"\",
		\"cost\": \"\",
		\"visa_level\": \"\",
		\"price\": \"\",
		\"opening_hours\": \"\",
		\"price_opening_hours_more\": \"\",
		\"position\": \"\",
		\"address\": \"\",
		\"phone\": \"\",
		\"level\": \"\",
		\"website\": \"\",
		\"opening_hours_desc\": \"\",
		\"price_desc\": \"\",
		\"arrive\": \"\"
	},
	\"traffic\": {
		\"desc\": \"\\u9996\\u90fd\\u5317\\u4eac\\u5728\\u4ea4\\u901a\\u4e0a\\u771f\\u53ef\\u79f0\\u4e3a\\u4e2d\\u56fd\\u7684\\u4e2d\\u5fc3\\uff0c\\u5404\\u79cd\\u4ea4\\u901a\\u65b9\\u5f0f\\u90fd\\u975e\\u5e38\\u65b9\\u4fbf\\uff0c\\u6839\\u636e\\u4f60\\u7684\\u60c5\\u51b5\\u9009\\u62e9\\u4e00\\u79cd\\u6700\\u4e2d\\u610f\\u7684\\u3002\\n\\u5317\\u4eac\\u7684\\u516c\\u5171\\u4ea4\\u901a\\u662f\\u5168\\u56fd\\u6700\\u4fbf\\u5b9c\\u7684\\u3002\\u5730\\u94c1\\u5168\\u7a0b2\\u5143\\uff0c\\u516c\\u4ea4\\u6301\\u53614\\u6298\\uff0c\\u5927\\u90e8\\u5206\\u516c\\u4ea4\\u8f66\\u53ea\\u9700\\u89814\\u6bdb\\uff0c4\\u6bdb\\u94b1\\u54e6~\\u6765\\u5317\\u4eac\\u65c5\\u6e38\\uff0c\\u4e00\\u5b9a\\u8981\\u529e\\u4e00\\u5f20\\u4ea4\\u901a\\u5361\\uff0c\\u62bc\\u91d120\\u5143\\uff0c\\u79bb\\u4eac\\u7684\\u65f6\\u5019\\u9000\\u5361\\u5373\\u53ef\\u3002\",
		\"remote\": [{
				\"name\": \"\\u706b\\u8f66\",
				\"desc\": \"\\u5317\\u4eac\\u662f\\u5168\\u56fd\\u94c1\\u8def\\u7684\\u67a2\\u7ebd\\uff0c\\u4e3b\\u8981\\u67094\\u4e2a\\u5ba2\\u8fd0\\u706b\\u8f66\\u7ad9\\uff0c\\u5206\\u522b\\u4e3a\\u5317\\u4eac\\u897f\\u7ad9\\u3001\\u5317\\u4eac\\u7ad9\\u3001\\u5317\\u4eac\\u5357\\u7ad9\\u3001\\u5317\\u4eac\\u5317\\u7ad9\\u3002\\n\\n\\u5404\\u5927\\u8f66\\u7ad9\\u5747\\u8bbe\\u6709\\u552e\\u7968\\u7a97\\u53e3\\uff0c\\u53ef\\u552e\\u5f53\\u65e5\\u53ca\\u9884\\u552e3\\u81f312\\u65e5\\u7684\\u5f02\\u5730\\u7968\\uff0c\\u90e8\\u5206\\u5217\\u8f66\\u8f66\\u7968\\u9884\\u552e\\u671f\\u4e3a\\u5341\\u65e5\\u5185\\u3002\\u94c1\\u8def\\u90e8\\u95e8\\u5728\\u5317\\u4eac\\u5e02\\u8bbe\\u6709220\\u4f59\\u4e2a\\u8f66\\u7968\\u4ee3\\u552e\\u70b9\\uff0c\\u53ef\\u5c31\\u8fd1\\u54a8\\u8be2\\u548c\\u8d2d\\u4e70\\u8f66\\u7968\\u3002\\n\\u63a8\\u8350\\u7f51\\u7edc\\u8ba2\\u7968\\uff08http:\\/\\/www.12306.cn\\/mormhweb\\/\\uff09\\u6216\\u7535\\u8bdd\\u8ba2\\u7968\\uff08010-96105105\\uff09\\u3002\\n1\\uff0e\\u5317\\u4eac\\u7ad9<\\/strong>\\u4f4d\\u4e8e\\u5317\\u4eac\\u5e02\\u5e02\\u533a\\uff0c\\u8ddd\\u79bb\\u5929\\u5b89\\u95e8\\u4ec5\\u67092.5\\u516c\\u91cc\\u3002\\n\\u5730\\u5740\\uff1a\\u4e1c\\u57ce\\u533a\\u6bdb\\u5bb6\\u6e7e\\u80e1\\u540c\\u753213\\u53f7\\u3002\\n\\u7535\\u8bdd\\uff1a010-51019999\\n\\u4ea4\\u901a\\uff1a\\u5730\\u94c12\\u53f7\\u7ebf\\u5317\\u4eac\\u7ad9\\u4e0b\\uff08\\u63a8\\u8350\\uff09\\uff1b\\n \\u516c\\u4ea49\\u300110\\u300120\\u300159\\u3001122\\u8def\\u5317\\u4eac\\u7ad9\\u4e1c\\u4e0b\\u3002\\n2.\\u5317\\u4eac\\u5317\\u7ad9<\\/strong>\\u4f4d\\u4e8e\\u5e02\\u533a\\uff0c\\u51fa\\u7ad9\\u5373\\u662f\\u7e41\\u534e\\u7684\\u897f\\u76f4\\u95e8\\u5546\\u533a\\u3002\\n\\u5730\\u5740\\uff1a\\u897f\\u57ce\\u533a\\u897f\\u76f4\\u95e8\\u5317\\u5927\\u8857\\n\\u7535\\u8bdd\\uff1a010-51866223\\n\\u4ea4\\u901a\\uff1a\\u5730\\u94c12\\u53f7\\u7ebf\\u30014\\u53f7\\u7ebf\\u300113\\u53f7\\u7ebf\\u897f\\u76f4\\u95e8\\u7ad9\\u4e0b\\uff08\\u63a8\\u8350\\uff09\\uff1b\\n \\u516c\\u4ea47\\u300116\\u300121\\u300144\\u3001\\u8fd0\\u901a104\\u3001347\\u3001392\\u3001632\\u8def\\u7b49\\u897f\\u76f4\\u95e8\\u5916\\u7ad9\\u4e0b\\u3002\\n3.\\u5317\\u4eac\\u5357\\u7ad9\\uff1a<\\/strong>\\u662f\\u5317\\u4eac\\u6700\\u73b0\\u4ee3\\u5316\\u7684\\u706b\\u8f66\\u7ad9\\uff0c\\u5747\\u4e3a\\u548c\\u8c10\\u53f7\\u5217\\u8f66\\u3002\\n\\u5730\\u5740\\uff1a\\u4e30\\u53f0\\u533a\\u6c38\\u5b89\\u95e8\\u5916\\u5927\\u8857\\n\\u7535\\u8bdd\\uff1a010-51836272\\n\\u4ea4\\u901a\\uff1a\\u5730\\u94c14\\u53f7\\u7ebf\\u5317\\u4eac\\u5357\\u7ad9\\u4e0b\\uff08\\u63a8\\u8350\\uff09\\uff1b\\n \\u516c\\u4ea453\\u3001102\\u3001122\\u3001381\\u3001458\\u3001692\\u8def\\u7b49\\u5317\\u4eac\\u5357\\u7ad9\\u4e0b\\u3002\\n4.\\u5317\\u4eac\\u897f\\u7ad9<\\/strong>\\n\\u5730\\u5740\\uff1a\\u4e30\\u53f0\\u533a\\u83b2\\u82b1\\u6c60\\u4e1c\\u8def118\\u53f7\\n\\u7535\\u8bdd\\uff1a010-63216253\\n\\u4ea4\\u901a\\uff1a\\u53ef\\u4e58\\u57509\\u53f7\\u7ebf\\u5357\\u6bb5\\u81f3\\u5317\\u4eac\\u897f\\u7ad9\\uff1b\\u8fd8\\u53ef\\u4e58\\u57501\\u53f7\\u7ebf\\u81f3\\u519b\\u4e8b\\u535a\\u7269\\u9986\\uff0c\\u8f6c\\u4e58\\u516c\\u4ea4\\u8f66\\u81f3\\u5317\\u4eac\\u897f\\u7ad9\\u4e0b\\u8f66\\uff1b\\u6216\\u4e58\\u57502\\u53f7\\u7ebf\\u81f3\\u957f\\u693f\\u8857\\uff0c\\u8f6c\\u4e58\\u516c\\u4ea4\\u8f66\\u81f3\\u5317\\u4eac\\u897f\\u7ad9\\u4e0b\\u8f66\\uff1b\\n \\u516c\\u4ea421\\u300152\\u3001387\\u3001414\\u7b49\\u5317\\u4eac\\u897f\\u7ad9\\u4e0b\\uff08\\u63a8\\u8350\\uff0c\\u56e0\\u4e3a\\u5730\\u94c19\\u53f7\\u7ebf\\u53ea\\u901a\\u5f80\\u90ca\\u533a\\uff09\\u3002\",
				\"pic_url\": \"\",
				\"pic_id\": \"\",
				\"ext\": \"\"
			}
		],
		\"local\": [{
				\"name\": \"\\u516c\\u4ea4\",
				\"desc\": \"\\u5317\\u4eac\\u516c\\u4ea4\\u7ebf\\u8def\\u4f17\\u591a\\uff0c\\u4f46\\u662f\\u5927\\u90e8\\u5206\\u516c\\u4ea4\\u7684\\u672b\\u73ed\\u65f6\\u95f4\\u4e3a22\\u70b9\\uff0c\\u5c11\\u91cf\\u4e3a23\\u70b9\\u3002\\u56e0\\u6b64\\uff0c\\u665a\\u4e0a22\\u70b9\\u4e4b\\u540e\\u505a\\u597d\\u8d76\\u672b\\u73ed\\u5730\\u94c1\\u6216\\u76f4\\u63a5\\u6253\\u8f66\\u7684\\u51c6\\u5907\\u5427\\uff01\\n1.<\\/strong>600\\u8def\\u4ee5\\u4e0b\\u7684\\u516c\\u4ea4\\u7ebf\\u8def\\uff0c\\u65e0\\u8bba\\u7a7a\\u8c03\\u8f66\\u6216\\u662f\\u975e\\u7a7a\\u8c03\\u8f66\\uff0c\\u65e0\\u8bba\\u4e58\\u5750\\u91cc\\u7a0b\\u8fdc\\u8fd1\\uff0c\\u4e00\\u5f8b1\\u5143\\/\\u6b21\\uff0c\\u6301\\u516c\\u4ea4\\u53614\\u6298\\u4f18\\u60e0\\u3002\\n2.<\\/strong>600\\u8def\\u4ee5\\u4e0a900\\u8def\\u4ee5\\u4e0b\\u7684\\u516c\\u4ea4\\u8f66\\u7ebf\\u8def\\uff0c\\u5355\\u4e00\\u7968\\u4ef7\\u7684\\u7ebf\\u8def\\u4e3a1\\u5143\\/\\u6b21\\uff0c\\u6301\\u516c\\u4ea4\\u53614\\u6298\\u3002\\u5206\\u6bb5\\u8ba1\\u4ef7\\u7684\\u7ebf\\u8def\\u6301\\u5361\\u4eab\\u53d7\\u539f\\u7968\\u4ef7\\u76844\\u6298\\u4f18\\u60e0\\u3002\\n3.<\\/strong>900\\u8def\\u4ee5\\u4e0a\\u7684\\u7ebf\\u8def\\uff0c\\u5355\\u4e00\\u7968\\u4ef7\\u7684\\u7ebf\\u8def\\uff0c\\u6301\\u5361\\u4eab\\u53d74\\u6298\\u4f18\\u60e0\\uff0c\\u5206\\u6bb5\\u8ba1\\u4ef7\\u7684\\u7ebf\\u8def\\uff0c\\u5317\\u4eac\\u5883\\u5185\\u7684\\u4eab\\u53d74\\u6298\\u4f18\\u60e0\\uff0c\\u5317\\u4eac\\u5883\\u5916\\u7684\\u4eab\\u53d78\\u6298\\u4f18\\u60e0\\u3002\\n4. <\\/strong>\\u4f7f\\u7528\\u516c\\u4ea4IC\\u5361\\u6ca1\\u6709\\u65f6\\u95f4\\u671f\\u9650\\uff0c\\u79bb\\u4eac\\u4e0d\\u518d\\u4f7f\\u7528\\u7684\\u65f6\\u5019\\u9000\\u5361\\u5373\\u53ef\\uff0c\\u529e\\u7406\\u516c\\u4ea4IC\\u5361\\u62bc\\u91d120\\u5143\\uff0c\\u9000\\u5361\\u65f6\\u8fd4\\u8fd8\\u3002\\n\\u516c\\u4ea4\\u96c6\\u56e2\\u5b98\\u7f51\\uff1ahttp:\\/\\/www.bjbus.com\\/home\\/index.php\\n\\u670d\\u52a1\\u70ed\\u7ebf: (010) 96166\\uff1b\\u96c6\\u56e2\\u603b\\u673a : (010) 63960088\\nTIPS: <\\/strong>\\n\\u53ef\\u4ee5\\u62e8\\u625396166\\u67e5\\u8be2\\u3002\\u5efa\\u8bae\\u5728\\u667a\\u80fd\\u624b\\u673a\\u4e0a\\u4e0b\\u8f7d\\u201c\\u5317\\u4eac\\u516c\\u4ea4\\u67e5\\u8be2\\u201d\\u624b\\u673a\\u5ba2\\u6237\\u7aef\\u3002\\n\\u516c\\u4ea4\\u4e00\\u5361\\u901a\\u76f8\\u5173\\u4e8b\\u9879 <\\/strong>\\n\\u529e\\u5361\\uff1a\\n\\uff08\\u4e00\\uff09\\u5728\\u4e00\\u5361\\u901a\\u516c\\u53f8\\u6388\\u6743\\u7684\\u53d1\\u5361\\/\\u5145\\u503c\\u70b9\\u7533\\u529e\\u548c\\u5145\\u503c\\u3002\\n\\uff08\\u4e8c\\uff09\\u7533\\u529e\\u65f6\\u987b\\u4ea4\\u7eb3\\u6bcf\\u5f20\\u536120\\u5143\\u7684\\u62bc\\u91d1\\uff0c\\u5373\\u65f6\\u529e\\u7406\\u3002\\n\\uff08\\u4e09\\uff09\\u7533\\u529e\\u65f6\\u987b\\u540c\\u65f6\\u5145\\u503c\\uff0c\\u9996\\u6b21\\u5145\\u503c\\u91d1\\u989d\\u4e0d\\u4f4e\\u4e8e20\\u5143\\uff0c\\u518d\\u6b21\\u5145\\u503c\\u989d\\u9700\\u4e3a10\\u5143\\u621610\\u5143\\u7684\\u6574\\u500d\\u6570\\u3002\\u5361\\u5185\\u4f59\\u989d\\u4e0d\\u8d85\\u8fc71000\\u5143\\u3002\\n\\uff08\\u56db\\uff09\\u5982\\u6709\\u900f\\u652f\\u60c5\\u51b5\\uff0c\\u6301\\u5361\\u4eba\\u5145\\u503c\\u65f6\\u5e94\\u5148\\u507f\\u8fd8\\u900f\\u652f\\u6b3e\\u3002\\n\\u7528\\u5361\\uff1a\\n\\u516c\\u4ea4\\u5361\\u53ef\\u4ee5\\u6253\\u8f66\\u3001\\u5750\\u516c\\u4ea4\\u3001\\u67d0\\u4e9b\\u8d85\\u5e02\\u53ef\\u4ee5\\u5237\\u5361\\u3001\\u5750\\u57ce\\u9645\\u706b\\u8f66\\u7b49\\u7b49\\u3002\\u3002\\u3002\\n\\u516c\\u4ea4\\u8f66\\uff1a4\\u6298\\uff0c\\u5355\\u4e00\\u8ba1\\u4ef7\\u7684\\u516c\\u4ea4\\u8f66\\u4e0a\\u8f66\\u5237\\uff0c\\u4e0d\\u662f\\u5355\\u4e00\\u8ba1\\u4ef7\\u7684\\u4e0a\\u4e0b\\u8f66\\u90fd\\u8981\\u5237\\u3002\\u5982\\u679c\\u4e0b\\u8f66\\u5fd8\\u4e86\\u5237\\uff0c\\u53ef\\u8981\\u4ed8\\u5168\\u7a0b\\u8def\\u8d39\\u7684\\u54e6\\u3002\\n\\u5730\\u94c1\\uff1a\\u4e0d\\u6253\\u6298\\u4e00\\u5f8b\\u662f2\\u5143\\uff0c\\u8fdb\\u51fa\\u7ad9\\u90fd\\u8981\\u5237\\u5361\\u3002\\n\\u57ce\\u9645\\u706b\\u8f66\\uff08\\u516b\\u8fbe\\u5cad\\uff09\\uff1a\\u76f4\\u63a5\\u5237\\u5361\\u8fdb\\u7ad9\\uff0c\\u51fa\\u7ad9\\u4e5f\\u8981\\u5237\\u5361\\uff01\\n\\u5145\\u503c\\uff1a\\n\\u5145\\u503c\\u5f88\\u65b9\\u4fbf\\uff0c\\u6211\\u6240\\u77e5\\u9053\\u7684\\u662f\\u4efb\\u4f55\\u4e00\\u4e2a\\u5730\\u94c1\\u7ad9\\u90fd\\u53ef\\u4ee5\\uff01\\n\\u9000\\u5361\\uff1a\\n\\u5f88\\u9ebb\\u70e6\\uff01\\u5168\\u5317\\u4eac\\u53ef\\u4ee5\\u9000\\u5361\\u7684\\u5730\\u65b9\\u4e0d\\u591a\\uff0c\\u800c\\u4e14\\u5f88\\u591a\\u5730\\u65b9\\u6392\\u961f\\u5f88\\u957f\\uff01\\u56e0\\u6b64\\u5728\\u5317\\u4eac\\u53c8\\u51fa\\u73b0\\u4e86\\u4e00\\u4e2a\\u65b0\\u7684\\u804c\\u4e1a\\uff1a\\u56de\\u6536\\u4ea4\\u901a\\u5361\\u3002\\u5f53\\u7136\\u4ed6\\u4eec\\u56de\\u6536\\u7684\\u4ef7\\u683c\\u8981\\u7565\\u4f4e\\u4e00\\u70b9\\uff0c\\u6bd5\\u7adf\\u4ed6\\u4eec\\u4e5f\\u8981\\u8d5a\\u94b1\\u3002\",
				\"pic_url\": \"\",
				\"pic_id\": \"\",
				\"ext\": \"\"
			}
		],
		\"extra\": [],
		\"article\": []
	},
	\"dining\": {
		\"desc\": \"\\u5317\\u4eac\\u662f\\u4e16\\u754c\\u7b2c\\u516b\\u5927\\u201c\\u7f8e\\u98df\\u4e4b\\u57ce\\u201d\\uff0c\\u5c45\\u5185\\u5730\\u4e4b\\u9996\\u3002\\u5317\\u4eac\\u7684\\u98ce\\u5473\\u5c0f\\u5403\\u5386\\u53f2\\u60a0\\u4e45\\u3001\\u54c1\\u79cd\\u7e41\\u591a\\u3001\\u7528\\u6599\\u8bb2\\u7a76\\u3001\\u5236\\u4f5c\\u7cbe\\u7ec6\\uff0c\\u582a\\u79f0\\u6709\\u53e3\\u7686\\u7891\\u3002\\u4eac\\u5473\\u5c0f\\u5403\\u7684\\u4ee3\\u8868\\u6709\\u8c46\\u6c41\\u513f\\u3001\\u8c46\\u9762\\u9165\\u7cd6\\u3001\\u9178\\u6885\\u6c64\\u3001\\u8336\\u6c64\\u3001\\u5c0f\\u7a9d\\u5934\\u3001\\u832f\\u82d3\\u5939\\u997c\\u3001\\u679c\\u812f\\u871c\\u996f\\u3001\\u51b0\\u7cd6\\u846b\\u82a6\\u3001\\u827e\\u7a9d\\u7a9d\\u3001\\u8c4c\\u8c46\\u9ec4\\u3001\\u9a74\\u6253\\u6eda\\u3001\\u704c\\u80a0\\u3001\\u7206\\u809a\\u3001\\u7092\\u809d\\u7b49\\u3002\\u5728\\u524d\\u95e8\\u3001\\u738b\\u5e9c\\u4e95\\u3001\\u62a4\\u56fd\\u5bfa\\u3001\\u540e\\u6d77\\u3001\\u725b\\u8857\\u8fd9\\u4e9b\\u5730\\u65b9\\u53ef\\u4ee5\\u5403\\u5230\\u6bd4\\u8f83\\u6b63\\u5b97\\u7684\\u8001\\u5317\\u4eac\\u5c0f\\u5403\\u3002\\n\\u9664\\u4e86\\u5c0f\\u5403\\u4ee5\\u5916\\uff0c\\u8fd8\\u53ef\\u4ee5\\u5403\\u5230\\u5f88\\u591a\\u65f6\\u5c1a\\u7f8e\\u98df\\uff0c\\u6bd4\\u5982\\u7c0b\\u8857\\u3001\\u4e09\\u91cc\\u5c6f\\u3001\\u5de5\\u4f53\\u3001\\u4e2d\\u5173\\u6751\\u3001CBD\\uff0c\\u8fd9\\u4e9b\\u5730\\u65b9\\u6c47\\u96c6\\u4e86\\u5f88\\u591a\\u5317\\u4eac\\u53ca\\u5404\\u56fd\\u7684\\u7279\\u8272\\u7f8e\\u98df\\u3002 \\n\\n\",
		\"food\": [{
				\"pic_url\": \"3b87e950352ac65c0c7317c4fbf2b21193138a16\",
				\"pic_id\": \"9b93488923455088d9431744\",
				\"ext\": \"\",
				\"name\": \"\\u5317\\u4eac\\u70e4\\u9e2d\",
				\"desc\": \"\\u6765\\u5317\\u4eac\\u600e\\u4e48\\u80fd\\u4e0d\\u5403\\u70e4\\u9e2d\\uff01\\u5317\\u4eac\\u70e4\\u9e2d\\u662f\\u5177\\u6709\\u4e16\\u754c\\u58f0\\u8a89\\u7684\\u5317\\u4eac\\u8457\\u540d\\u83dc\\u5f0f\\uff0c\\u7528\\u6599\\u4e3a\\u4f18\\u8d28\\u8089\\u98df\\u9e2d\\u5317\\u4eac\\u9e2d\\uff0c\\u679c\\u6728\\u70ad\\u706b\\u70e4\\u5236\\uff0c\\u8272\\u6cfd\\u7ea2\\u6da6\\uff0c\\u8089\\u8d28\\u80a5\\u800c\\u4e0d\\u817b\\u3002\\u6700\\u8457\\u540d\\u7684\\u5f53\\u5c5e\\u5168\\u805a\\u5fb7\\u70e4\\u9e2d\\uff0c\\u8fd8\\u6709\\u4fbf\\u5b9c\\u574a\\u7b49\\u8001\\u5b57\\u53f7\\uff0c\\u73b0\\u5728\\u6bd4\\u8f83\\u53d7\\u6b22\\u8fce\\u7684\\u662f\\u5927\\u8463\\u70e4\\u9e2d\\uff0c\\u503c\\u5f97\\u4e00\\u5c1d\\u3002\",
				\"type_tag\": \"42\",
				\"hot_tag\": [\"51\"],
				\"restaurants\": [\"3326370bfafeae289c41e741\", \"1c405beb2bb1a1344c911c40\", \"5ae22bb1a1344c9130041d40\", \"6b4fe1f9991a44cfe7d51640\", \"39394530bc348f2f876a465b\", \"19e35bf7b11e9ae63182705b\", \"8adad8d4b77c03e8b9d26d5b\"]
			}
		],
		\"extra\": [],
		\"article\": [{
				\"name\": \"\\u5317\\u4eac70\\u4e2a\\u5de8\\u597d\\u5403\\u53c8\\u4e0d\\u8d35\\u7684\\u5730\\u65b9\",
				\"url\": \"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/scene_article\\/2013-01-28\\/1365920971.html\"
			}
		],
		\"place\": [{
				\"pic_url\": \"00e93901213fb80ee39eb27336d12f2eb83894c3\",
				\"pic_id\": \"eb7480dfdaacf73979947a61\",
				\"ext\": {
					\"width\": \"400\",
					\"height\": \"300\",
					\"size\": \"50435\",
					\"upload_uid\": \"454564448\",
					\"upload_uname\": \"\\u683c\\u739b\\u82dc\\u84ff\"
				},
				\"desc\": \"\\u5317\\u4eac\\u6700\\u51fa\\u540d\\u7684\\u7f8e\\u98df\\u805a\\u96c6\\u5730\\uff01\\u8fd9\\u513f\\u57fa\\u672c\\u4e0a\\u4e0d\\u662f\\u8001\\u5317\\u4eac\\u7f8e\\u98df\\uff0c\\u800c\\u662f\\u6765\\u81ea\\u4e94\\u6e56\\u56db\\u6d77\\u7684\\u7f8e\\u98df\\u754c\\u7684\\u82f1\\u96c4\\u8c6a\\u6770\\u4eec\\uff01\\u534e\\u706f\\u521d\\u4e0a\\u65f6\\uff0c\\u8857\\u4e24\\u4fa7\\u7684\\u7ea2\\u706f\\u7b3c\\u9f50\\u5237\\u5237\\u5730\\u4eae\\u8d77\\uff0c\\u9738\\u6c14\\u5916\\u9732\\uff01\\n\\u7c0b\\u8857\\u4e3b\\u8981\\u6709\\u9ebb\\u8fa3\\u5c0f\\u9f99\\u867e\\u3001\\u998b\\u5634\\u86d9\\u3001\\u70e4\\u9c7c\\u3001\\u70e4\\u4e32\\u7b49\\u7b49\\u91cd\\u53e3\\u5473\\u7f8e\\u98df\\u3002\\u7c0b\\u8857\\u7684\\u53e6\\u4e00\\u7279\\u8272\\u662f\\uff0c\\u901a\\u5bb5\\u8425\\u4e1a\\uff0c\\u56e0\\u6b64\\u4e5f\\u662f\\u4e00\\u591c\\u5bb5\\u5723\\u5730\\u3002\\n\\u5730\\u5740:\\u4e1c\\u57ce\\u533a\\u4e1c\\u76f4\\u95e8\\u5185\\u5927\\u8857\\n\\u4ea4\\u901a:\\u5730\\u94c15\\u53f7\\u7ebf\\u5317\\u65b0\\u6865\\u7ad9\\u4e0b\\u8f66\\u6216\\u5730\\u94c12\\u53f7\\u7ebf\\u4e1c\\u76f4\\u95e8\\u7ad9\\u4e0b\\u8f66\\u897f\\u884c\\uff0c\\u6216\\u4e58\\u5750106\\u3001107\\u3001117\\u3001635\\u8def\\u516c\\u4ea4\\u4e1c\\u5185\\u5c0f\\u8857\\u7ad9\\u4e0b\\u8f66\\u3002\\n\",
				\"name\": \"\\u7c0b\\u8857\",
				\"stores\": []
			}
		],
		\"store\": [{
				\"pic_url\": \"09fa513d269759ee803220ffb3fb43166d22dfa0\",
				\"pic_id\": \"181fd42c83d676bb33e0b7fb\",
				\"ext\": {
					\"width\": \"540\",
					\"height\": \"360\",
					\"size\": \"82217\",
					\"upload_uid\": \"790255685\",
					\"upload_uname\": \"\\u53e4\\u6708\\u4e00\\u8bfa\"
				},
				\"desc\": \"\\u8981\\u8bf4\\u5403\\u8001\\u5317\\u4eac\\u6dae\\u8089\\uff0c\\u4e1c\\u6765\\u987a\\u81ea\\u7136\\u6ca1\\u7684\\u8bf4\\uff0c\\u706b\\u7ea2\\u7684\\u70ad\\u706b\\uff0c\\u94dc\\u706b\\u9505\\uff0c\\u770b\\u8fd9\\u67b6\\u52bf\\u5c31\\u7279\\u522b\\u5730\\u9053\\u3002\\u8fd9\\u91cc\\u7684\\u8089\\u975e\\u5e38\\u4e0d\\u9519\\uff0c\\u51ac\\u5929\\u70ed\\u70ed\\u4e4e\\u4e4e\\u7684\\u5403\\u4e00\\u987f\\u975e\\u5e38\\u723d\\uff0c\\u4e0d\\u8fc7\\u7531\\u4e8e\\u662f\\u8001\\u5b57\\u53f7\\uff0c\\u4ef7\\u683c\\u8c08\\u4e0d\\u4e0a\\u4fbf\\u5b9c\\u3002\\n\\u4eba\\u5747\\u6d88\\u8d39\\uff1a100\\u5143\\n\\u5730\\u5740\\uff1a\\u4e1c\\u57ce\\u533a\\u738b\\u5e9c\\u4e95\\u5927\\u8857198\\u53f7\\uff08\\u8fd1\\u738b\\u5e9c\\u4e95\\u767e\\u8d27\\u5927\\u697c\\uff09\\n\\u7535\\u8bdd\\uff1a010-65139661\",
				\"name\": \"\\u4e1c\\u6765\\u987a\",
				\"stores\": []
			}
		]
	},
	\"accommodation\": {
		\"desc\": \"\\u5317\\u4eac\\u4f5c\\u4e3a\\u4e00\\u56fd\\u4e4b\\u9996\\u90fd\\uff0c\\u4f4f\\u5bbf\\u79cd\\u7c7b\\u7e41\\u591a\\uff0c\\u9009\\u62e9\\u975e\\u5e38\\u4e30\\u5bcc\\uff0c\\u5206\\u5e03\\u5728\\u57ce\\u533a\\u5404\\u5904\\uff0c\\u5404\\u6863\\u6b21\\u7684\\u90fd\\u6709\\u3002\\u5317\\u4eac\\u56ca\\u62ec\\u4e86\\u5168\\u7403\\u8fde\\u9501\\u7684\\u5404\\u79cd\\u9ad8\\u6863\\u8c6a\\u534e\\u9152\\u5e97\\uff0c\\u5f53\\u7136\\u8fd8\\u6709\\u5f88\\u591a\\u5bcc\\u6709\\u8001\\u5317\\u4eac\\u7279\\u8272\\u7684\\u56db\\u5408\\u9662\\u9152\\u5e97\\uff0c\\u53e6\\u5916\\uff0c\\u5404\\u79cd\\u5bcc\\u6709\\u7279\\u8272\\u7684\\u9752\\u5e74\\u65c5\\u820d\\uff0c\\u4ee5\\u53ca\\u4fbf\\u5b9c\\u5b9e\\u60e0\\u7684\\u5404\\u79cd\\u62db\\u5f85\\u6240\\u7b49\\uff0c\\u80fd\\u591f\\u6ee1\\u8db3\\u4e0d\\u80fd\\u6d88\\u8d39\\u5c42\\u6b21\\u4eba\\u7fa4\\u7684\\u4f4f\\u5bbf\\u9700\\u6c42\\u3002\\u5728\\u5317\\u4eac\\u6311\\u9009\\u9152\\u5e97\\uff0c\\u4e3b\\u8981\\u6839\\u636e\\u81ea\\u5df1\\u7684\\u7ecf\\u6d4e\\u80fd\\u529b\\uff0c\\u518d\\u4f9d\\u636e\\u9152\\u5e97\\u7684\\u5730\\u7406\\u4f4d\\u7f6e\\u548c\\u4ea4\\u901a\\u60c5\\u51b5\\u6765\\u9009\\u62e9\\u3002\\u603b\\u7684\\u8bf4\\u6765\\uff0c\\u9009\\u62e9\\u4f4f\\u5728\\u5730\\u94c1\\u6cbf\\u7ebf\\uff0c\\u662f\\u6700\\u65b9\\u4fbf\\u51fa\\u884c\\u7684\\uff0c\\u56e0\\u4e3a\\u5317\\u4eac\\u7684\\u4ea4\\u901a\\u5f88\\u62e5\\u5835\\uff0c\\u9760\\u8fd1\\u5730\\u94c1\\u4f1a\\u6bd4\\u8f83\\u6709\\u4fdd\\u969c\\u3002\",
		\"area\": [{
				\"name\": \"\\u5929\\u5b89\\u95e8-\\u738b\\u5e9c\\u4e95-\\u4e1c\\u5355\",
				\"desc\": \"\\u6bd7\\u90bb\\u5929\\u5b89\\u95e8\\u2014\\u6545\\u5bab\\u4e2d\\u5fc3\\u666f\\u533a\\uff0c\\u6b65\\u884c\\u5373\\u53ef\\u8fbe\\u5929\\u5b89\\u95e8\\u5e7f\\u573a\\uff0c\\u53ef\\u65b9\\u4fbf\\u65e9\\u8d77\\u770b\\u5347\\u56fd\\u65d7\\u3002\\u8fd9\\u91cc\\u662f\\u5317\\u4eac\\u6a2a\\u8d2f\\u4e1c\\u897f\\u7684\\u5730\\u94c11\\u53f7\\u7ebf\\u3001\\u7eb5\\u8d2f\\u5357\\u5317\\u7684\\u5730\\u94c15\\u53f7\\u7ebf\\uff0c\\u4ee5\\u53ca\\u73af\\u7ed5\\u57ce\\u533a\\u76842\\u53f7\\u7ebf\\u7684\\u4ea4\\u6c47\\u5904\\uff0c\\u4ea4\\u901a\\u975e\\u5e38\\u4fbf\\u5229\\u3002\\u8fd9\\u4e00\\u5e26\\u4e34\\u8857\\u7684\\u95e8\\u9762\\u57fa\\u672c\\u90fd\\u88ab\\u88ab\\u5927\\u578b\\u5546\\u573a\\u548c\\u4e94\\u661f\\u7ea7\\u9152\\u5e97\\u5360\\u636e\\uff0c\\u800c\\u4e00\\u4e9b\\u7269\\u7f8e\\u4ef7\\u5ec9\\u7684\\u7ecf\\u6d4e\\u578b\\u9152\\u5e97\\u8717\\u5c45\\u5728\\u4e00\\u4e9b\\u80e1\\u540c\\u4e2d\\u3002\\u6b64\\u5916\\uff0c\\u8fd9\\u91cc\\u7684\\u65f6\\u5c1a\\u8d2d\\u7269\\u8857\\uff0c\\u4e0d\\u8bba\\u5176\\u89c4\\u6a21\\uff0c\\u8fd8\\u662f\\u7e41\\u534e\\u7a0b\\u5ea6\\uff0c\\u90fd\\u4ee4\\u4eba\\u8d5e\\u53f9\\u3002\\u51fa\\u95e8\\u5373\\u53ef\\u8d2d\\u7269\\uff0c\\u4e0d\\u4ec5\\u7701\\u4e86\\u4e00\\u7b14\\u4ea4\\u901a\\u8d39\\uff0c\\u8fd8\\u8282\\u7701\\u4e86\\u65f6\\u95f4\\u3002\",
				\"hotels\": [7, 1839, 4521, 4525]
			}
		],
		\"extra\": [],
		\"article\": [],
		\"recommend\": [{
				\"rec_tit\": \"\",
				\"rec_con\": \"\"
			}
		],
		\"where\": [{
				\"pic_url\": \"91529822720e0cf38d9e9d5f0a46f21fbe09aa2d\",
				\"pic_id\": \"450875dbc6d2b01e81df7f61\",
				\"ext\": {
					\"width\": \"350\",
					\"height\": \"233\",
					\"size\": \"58577\",
					\"upload_uid\": \"454564448\",
					\"upload_uname\": \"\\u683c\\u739b\\u82dc\\u84ff\"
				},
				\"desc\": \"\\u7279\\u8272\\uff1a\\u77f3\\u74e6\\u7684\\u5927\\u95e8\\uff0c\\u6728\\u5934\\u7684\\u95e8\\u724c\\uff0c\\u6697\\u7ea2\\u8272\\u7684\\u95e8\\u695e\\uff0c\\u53e4\\u8272\\u53e4\\u9999\\u53c8\\u5e72\\u51c0\\u3002\\n\\n\",
				\"name\": \"\\u74e6\\u5f53\\u56fd\\u9645\\u9752\\u5e74\\u65c5\\u820d\",
				\"stores\": [{
						\"extInfo\": [],
						\"name\": \"\\u74e6\\u5f53\\u9752\\u5e74\\u65c5\\u793e\"
					}
				]
			}
		]
	},
	\"line\": {
		\"list\": [{
				\"name\": \"\\u300a\\u975e\\u8bda\\u52ff\\u62702\\u300b\\u5e26\\u4f60\\u6e38\",
				\"desc\": \"D1 \\u6155\\u7530\\u5cea\\u957f\\u57ce\\r\\nD2 \\u7d2b\\u7af9\\u9662\\u516c\\u56ed \\u2192 798\\u827a\\u672f\\u533a\\r\\nD3 \\u6b22\\u4e50\\u8c37 \\u2192 \\u94f6\\u6cf0\\u4e2d\\u5fc3\",
				\"path\": [
					[{
							\"sid\": \"0\",
							\"sname\": \"\",
							\"map_x\": \"0\",
							\"map_y\": \"0\",
							\"surl\": \"\"
						}
					]
				]
			}
		]
	},
	\"shopping\": {
		\"desc\": \"\\u5317\\u4eac\\u4f5c\\u4e3a\\u9996\\u90fd\\uff0c\\u96c6\\u7ed3\\u4e86\\u4f17\\u591a\\u5546\\u573a\\u548c\\u54c1\\u724c\\uff0c\\u4e5f\\u662f\\u4e00\\u4e2a\\u8d2d\\u7269\\u7684\\u5929\\u5802\\u3002\\n\\u6d77\\u6dc0\\u3001\\u671d\\u9633\\u3001\\u4e1c\\u57ce\\u3001\\u897f\\u57ce\\u56db\\u5927\\u57ce\\u533a\\uff0c\\u66f4\\u662f\\u96c6\\u5927\\u578b\\u5546\\u8857\\u3001\\u65f6\\u5c1a\\u8d2d\\u7269\\u5546\\u53a6\\u548c\\u5404\\u7c7b\\u7279\\u8272\\u5c0f\\u5e97\\u4e3a\\u4e00\\u5904\\u3002\\u8d2d\\u4e70\\u56fd\\u9645\\u5927\\u724c\\u53ef\\u4ee5\\u53bb\\u5927\\u671b\\u8def\\u6216\\u8005\\u4e09\\u91cc\\u5c6f\\uff0c\\u60f3\\u8981\\u5728\\u6279\\u53d1\\u5e02\\u573a\\u626b\\u8d27\\u53ef\\u4ee5\\u53bb\\u52a8\\u7269\\u56ed\\u670d\\u88c5\\u6279\\u53d1\\u5e02\\u573a\\uff0c\\u60f3\\u8981\\u5e26\\u4e9b\\u8001\\u5317\\u4eac\\u7279\\u8272\\u7684\\u5546\\u54c1\\u56de\\u5bb6\\u53ef\\u4ee5\\u53bb\\u5927\\u6805\\u680f\\u7684\\u51e0\\u5bb6\\u8001\\u5b57\\u53f7\\u8f6c\\u8f6c\\uff0c\\u60f3\\u8981\\u6dd8\\u4e9b\\u53e4\\u8463\\u53ef\\u4ee5\\u53bb\\u6f58\\u5bb6\\u56ed\\u65e7\\u8d27\\u5e02\\u573a\\u3002\\n\",
		\"goods\": [{
				\"name\": \"\\u7a3b\\u9999\\u6751\\u7cd5\\u70b9\",
				\"desc\": \"\\u59cb\\u5efa\\u4e8e1895\\u5e74\\uff08\\u6e05\\u5149\\u7eea21\\u5e74\\uff09\\uff0c\\u4f4d\\u4e8e\\u524d\\u95e8\\u5916\\u89c2\\u97f3\\u5bfa\\uff0c\\u5357\\u5e97\\u5317\\u5f00\\uff0c\\u524d\\u5e97\\u540e\\u5382\\uff0c\\u5f88\\u6709\\u7279\\u8272\\uff0c\\uff08\\u65f6\\u79f0\\u201c\\u7a3b\\u9999\\u6751\\u5357\\u8d27\\u5e97\\u201d\\uff09\\uff0c\\u662f\\u4eac\\u57ce\\u751f\\u4ea7\\u7ecf\\u8425\\u5357\\u5473\\u98df\\u54c1\\u7684\\u7b2c\\u4e00\\u5bb6\\uff0c\\u201c\\u7a3b\\u9999\\u6751\\u201d\\u8fd9\\u4e00\\u5b57\\u53f7\\u5c31\\u6210\\u4e86\\u4e0d\\u4e8c\\u9009\\u62e9\\u3002\",
				\"pic_url\": \"3bf33a87e950352a26f46e3c5243fbf2b2118b69\",
				\"pic_id\": \"b41b7ac6439bbbe47eb9b0fb\",
				\"ext\": {
					\"width\": \"540\",
					\"height\": \"360\",
					\"size\": \"97601\",
					\"upload_uid\": \"790255685\",
					\"upload_uname\": \"\\u53e4\\u6708\\u4e00\\u8bfa\"
				}
			}
		],
		\"business\": [{
				\"name\": \"\\u897f\\u5355\",
				\"desc\": \"\\u897f\\u5355\\uff0c\\u662f\\u5317\\u4eac\\u5e02\\u897f\\u57ce\\u533a\\u7684\\u4e00\\u4e2a\\u4ee5\\u5546\\u4e1a\\u4e3a\\u4e3b\\u7684\\u8857\\u533a\\u3002\\u897f\\u5355\\u5f97\\u540d\\u4e8e\\u8001\\u5317\\u4eac\\u57ce\\u4fd7\\u79f0\\u7684\\u897f\\u5355\\u724c\\u697c\\u3002\\u897f\\u5355\\u4ee5\\u897f\\u5355\\u8def\\u53e3\\u4e3a\\u4e2d\\u5fc3\\uff0c\\u6cbf\\u897f\\u5355\\u6587\\u5316\\u5e7f\\u573a\\u3001\\u897f\\u5355\\u5317\\u5927\\u8857\\u6709\\u8bf8\\u591a\\u5546\\u4e1a\\u8bbe\\u65bd\\u5206\\u5e03\\u3002\\u897f\\u5355\\u7684\\u5546\\u4e1a\\u4e3b\\u6253\\u9752\\u6625\\u65f6\\u5c1a\\u5143\\u7d20\\uff0c\\u56e0\\u800c\\u5438\\u5f15\\u8f83\\u591a\\u5317\\u4eac\\u672c\\u5730\\u5e74\\u8f7b\\u4eba\\u524d\\u5f80\\u4f11\\u95f2\\u3001\\u8d2d\\u7269\\uff0c\\u6709\\u201c\\u5e74\\u8f7b\\u4eba\\u7684\\u8d2d\\u7269\\u5929\\u5802\\u201d\\u4e4b\\u7f8e\\u8a89\\u3002\\u4e3b\\u8981\\u8d2d\\u7269\\u573a\\u6240\\u6709\\uff1a\\u4e2d\\u53cb\\u767e\\u8d27\\uff0c\\u541b\\u592a\\u767e\\u8d27\\uff0c\\u897f\\u5355\\u5927\\u60a6\\u57ce\\uff0c\\u897f\\u5355\\u6587\\u5316\\u5e7f\\u573a\\u3001\\u897f\\u5355\\u56fe\\u4e66\\u5927\\u53a6\\u3001\\u897f\\u5355\\u5546\\u573a\\u3001\\u897f\\u5355\\u8d5b\\u7279\\u3001\\u897f\\u5355\\u8d2d\\u7269\\u4e2d\\u5fc3\\u7b49\\u3002\",
				\"pic_url\": \"fc1f4134970a304e2bcd3d46d1c8a786c8175c9a\",
				\"pic_id\": \"197af82cc0fd38fd88d74e61\",
				\"ext\": {
					\"width\": \"315\",
					\"height\": \"210\",
					\"size\": \"88236\",
					\"upload_uid\": \"454564448\",
					\"upload_uname\": \"\\u683c\\u739b\\u82dc\\u84ff\"
				}
			}
		],
		\"extra\": [],
		\"article\": [{
				\"name\": \"\\u5317\\u4eac\\u5341\\u5927\\u8d2d\\u7269\\u4e2d\\u5fc3\",
				\"url\": \"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/scene_article\\/2013-01-28\\/1363735717.html\"
			}, {
				\"name\": \"\\u5317\\u4eac\\u8d2d\\u7269\\u597d\\u53bb\\u5904\",
				\"url\": \"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/scene_article\\/2013-01-29\\/1367082836.html\"
			}, {
				\"name\": \"\\u5317\\u4eac\\u65c5\\u6e38\\u7279\\u8272\\u8d2d\\u7269\\u597d\\u53bb\\u5904\",
				\"url\": \"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/scene_article\\/2013-03-21\\/1365418273.html\"
			}
		]
	},
	\"entertainment\": {
		\"desc\": \"\\u5317\\u4eac\\u5f97\\u9996\\u90fd\\u4e4b\\u5229\\uff0c\\u57ce\\u91cc\\u7684\\u5a31\\u4e50\\u591a\\u79cd\\u591a\\u6837\\u3002\\u6b63\\u6708\\u91cc\\u901b\\u5e99\\u4f1a\\uff0c\\u95f2\\u6687\\u65f6\\u8fdb\\u8336\\u9986\\u513f\\uff0c\\u5174\\u8d77\\u65f6\\u542c\\u4eac\\u5267\\uff0c\\u591c\\u8272\\u4e2d\\u6ce1\\u9152\\u5427\\uff0c\\u51ac\\u5b63\\u91cc\\u53bb\\u6ed1\\u96ea\\uff0c\\u4e00\\u523b\\u90fd\\u4e0d\\u5f97\\u6b47\\u3002\",
		\"activity\": [{
				\"name\": \"\\u5317\\u4eac\\u5927\\u5b66\\u751f\\u7535\\u5f71\\u8282\",
				\"desc\": \"\\u4ecb\\u7ecd\\uff1a\\u6bcf\\u5e74\\u5ea6\\u4e2d\\u56fd\\u7b2c\\u4e00\\u4e2a\\u7535\\u5f71\\u8282\\uff0c\\u5176\\u6743\\u5a01\\u6027\\u53d7\\u5230\\u7535\\u5f71\\u754c\\u4eba\\u58eb\\u7684\\u666e\\u904d\\u8ba4\\u540c\\u3002\\u4ee5\\u5927\\u5b66\\u751f\\u529e\\uff0c\\u5927\\u5b66\\u751f\\u770b\\uff0c\\u5927\\u5b66\\u751f\\u8bc4\\u4e3a\\u98ce\\u683c\\uff0c\\u9971\\u542b\\u9752\\u6625\\u6fc0\\u60c5\\uff0c\\u4f53\\u73b0\\u6587\\u5316\\u610f\\u8bc6\\uff0c\\u6811\\u7acb\\u4e86\\u4e0d\\u540c\\u4e8e\\u5176\\u4ed6\\u6240\\u6709\\u7535\\u5f71\\u8282\\u7684\\u5168\\u65b0\\u5f62\\u8c61\\u3002\\n\\u65f6\\u95f4\\uff1a\\u6bcf\\u5e744\\u6708\\n\\u5730\\u70b9\\uff1a\\u5404\\u5927\\u9ad8\\u6821\\u5f71\\u9662\",
				\"pic_url\": \"\",
				\"pic_id\": \"\",
				\"ext\": \"\"
			}
		],
		\"where\": [],
		\"extra\": [],
		\"article\": []
	},
	\"geography_history\": {
		\"geography_climate\": {
			\"desc\": \"\\u5317\\u4eac\\u590f\\u5b63\\u708e\\u70ed\\u591a\\u96e8\\uff0c\\u51ac\\u5b63\\u5bd2\\u51b7\\u5e72\\u71e5\\uff0c\\u6625\\u3001\\u79cb\\u5b63\\u77ed\\u6682\\uff0c\\u5c5e\\u4e8e\\u5178\\u578b\\u7684\\u6696\\u6e29\\u5e26\\u534a\\u6e7f\\u6da6\\u5927\\u9646\\u6027\\u5b63\\u98ce\\u6c14\\u5019\\u3002\\u4e00\\u5e74\\u7684\\u5e73\\u5747\\u6c14\\u6e29\\u5927\\u7ea6\\u4e3a10~12\\u6444\\u6c0f\\u5ea6\\u3002\\u6700\\u51b7\\u6708\\uff081\\u6708\\uff09-7~-4\\u6444\\u6c0f\\u5ea6\\uff0c\\u6700\\u70ed\\u6708\\uff087\\u6708\\uff0925~26\\u6444\\u6c0f\\u5ea6\\u3002\\u5168\\u5e74\\u65e0\\u971c\\u671f\\u7ea6180\\u81f3200\\u5929\\u3002\\u5e74\\u5e73\\u5747\\u964d\\u96e8\\u91cf\\u7ea6644\\u6beb\\u7c73\\uff0c\\u4e3a\\u534e\\u5317\\u5730\\u533a\\u964d\\u96e8\\u6700\\u591a\\u7684\\u5730\\u533a\\u4e4b\\u4e00\\u3002\\u590f\\u5b63\\u5929\\u6c14\\u708e\\u70ed\\u4e14\\u591a\\u66b4\\u96e8\\uff0c\\u964d\\u6c34\\u53ef\\u8fbe\\u5168\\u5e74\\u768470%~80%\\u3002\\u5317\\u4eac\\u53ca\\u534e\\u5317\\u6bcf\\u9022\\u6625\\u5b63\\u66fe\\u591a\\u53d1\\u6c99\\u5c18\\u66b4\\uff0c\\u4f46\\u7ecf\\u8fc7\\u653f\\u5e9c\\u5bf9\\u5185\\u8499\\u53e4\\u8349\\u539f\\u3001\\u9ec4\\u571f\\u9ad8\\u539f\\u548c\\u6cb3\\u5317\\u76f8\\u5173\\u5730\\u533a\\u8fdb\\u884c\\u4e86\\u73af\\u5883\\u6cbb\\u7406\\u540e\\uff0c\\u5317\\u4eac\\u7684\\u6c99\\u5c18\\u60c5\\u51b5\\u5df2\\u7ecf\\u6709\\u5f88\\u5927\\u597d\\u8f6c\\u3002\"
		},
		\"history\": {
			\"desc\": \"\\u5317\\u4eac\\u6700\\u65e9\\u89c1\\u4e8e\\u6587\\u732e\\u7684\\u540d\\u79f0\\u53eb\\u505a\\u84df\\uff08\\u516c\\u5143\\u524d11\\u4e16\\u7eaa\\u65f6\\u897f\\u5468\\u7684\\u4e00\\u4e2a\\u5206\\u5c01\\u56fd\\uff09\\uff0c\\u540e\\u6765\\u4e00\\u76f4\\u662f\\u71d5\\u7684\\u90fd\\u57ce\\uff0c\\u4e4b\\u540e\\u5317\\u4eac\\u8fd8\\u6709\\u8fc7\\u5357\\u4eac\\u3001\\u71d5\\u4eac\\u3001\\u4e2d\\u90fd\\u7b49\\u540d\\u79f0\\u3002\\u76f4\\u5230\\u5143\\u521d\\u65b0\\u7684\\u201c\\u5143\\u5927\\u90fd\\u201d\\u5168\\u90e8\\u5efa\\u6210\\uff0c\\u5317\\u4eac\\u88ab\\u9a6c\\u53ef\\u00b7\\u6ce2\\u7f57\\u4e2d\\u79f0\\u4e4b\\u4e3a\\u201c\\u4e16\\u754c\\u83ab\\u80fd\\u4e0e\\u6bd4\\u201d\\uff0c\\u4e5f\\u4ece\\u6b64\\u53d6\\u4ee3\\u4e86\\u957f\\u5b89\\u3001\\u6d1b\\u9633\\u3001\\u6c74\\u6881\\u7b49\\u53e4\\u90fd\\u7684\\u5730\\u4f4d\\uff0c\\u6210\\u4e3a\\u4e2d\\u56fd\\u7684\\u653f\\u6cbb\\u4e2d\\u5fc3\\uff0c\\u5e76\\u5ef6\\u7eed\\u5230\\u660e\\u3001\\u6e05\\u4e24\\u4ee3\\u3002\\u89e3\\u653e\\u540e\\u6210\\u4e3a\\u4e2d\\u534e\\u4eba\\u6c11\\u5171\\u548c\\u56fd\\u7684\\u9996\\u90fd\\uff0c\\u76ee\\u524d\\u662f\\u4e2d\\u56fd\\u7684\\u653f\\u6cbb\\u3001\\u6587\\u5316\\u548c\\u7ecf\\u6d4e\\u4e2d\\u5fc3\\u3002\"
		},
		\"art\": {
			\"desc\": \"\\u4eac\\u5267\\u662f\\u5728\\u5317\\u4eac\\u878d\\u5408\\u800c\\u5f62\\u6210\\u7684\\u620f\\u66f2\\u5267\\u79cd\\uff0c\\u662f\\u4e2d\\u56fd\\u7684\\u56fd\\u7cb9\\u3002\\u4eac\\u5267\\u7684\\u884c\\u5f53\\u9f50\\u5168\\u3001\\u8868\\u6f14\\u6210\\u719f\\u3001\\u6c14\\u52bf\\u5b8f\\u7f8e\\uff0c\\u662f\\u8fd1\\u4ee3\\u4e2d\\u56fd\\u620f\\u66f2\\u7684\\u4ee3\\u8868\\u3002\\n\\u5317\\u4eac\\u7684\\u6c11\\u4fd7\\u6709\\u7740\\u591a\\u6c11\\u65cf\\u878d\\u5408\\u6240\\u7279\\u6709\\u7684\\u6587\\u5316\\u5f62\\u5f0f\\u548c\\u76f8\\u4e92\\u6e17\\u900f\\u4ea4\\u878d\\u5f62\\u6210\\u7684\\u5730\\u65b9\\u6027\\u6c11\\u4fd7\\uff0c\\u5305\\u62ec\\u4e86\\u65f6\\u4ee4\\u5b63\\u8282\\u3001\\u5a5a\\u4e27\\u5a36\\u5ac1\\u3001\\u5e99\\u4f1a\\u5e02\\u4e95\\u7b49\\u7b49\\uff0c\\u5185\\u5bb9\\u591a\\u59ff\\u591a\\u5f69\\u3002\\u5929\\u6865\\u4e50\\u8336\\u56ed\\u53ef\\u4ee5\\u89c2\\u770b\\u8001\\u5317\\u4eac\\u4e60\\u4fd7\\u3002\\n\\u6625\\u8282\\u6765\\u5317\\u4eac\\uff0c\\u5e99\\u4f1a\\u5c31\\u4e00\\u5b9a\\u4e0d\\u80fd\\u9519\\u8fc7\\uff0c\\u91cc\\u9762\\u6709\\u5404\\u79cd\\u5404\\u6837\\u7684\\u6c11\\u95f4\\u827a\\u672f\\u8868\\u6f14\\uff1b\\u5730\\u9053\\u7684\\u4eac\\u5473\\u5c0f\\u5403\\u548c\\u6c11\\u95f4\\u4f20\\u7edf\\u827a\\u4eba\\u7684\\u5de5\\u827a\\u54c1\\u3002\\n\\u5317\\u4eac\\u662f\\u666f\\u6cf0\\u84dd\\u6280\\u672f\\u7684\\u53d1\\u6e90\\u5730\\uff0c \\u4f20\\u7edf\\u624b\\u5de5\\u827a\\u54c1\\u7ee2\\u4eba\\u5df2\\u6709\\u4e00\\u5343\\u591a\\u5e74\\u7684\\u5386\\u53f2\\uff0c\\u795e\\u6001\\u5404\\u5f02\\uff0c\\u8272\\u5f69\\u7eda\\u4e3d\\uff0c\\u98ce\\u683c\\u9ad8\\u96c5\\uff0c\\u5177\\u6709\\u5f88\\u9ad8\\u7684\\u6b23\\u8d4f\\u548c\\u6536\\u85cf\\u4ef7\\u503c\\u3002\\n\\u5317\\u4eac\\u662f\\u4e2d\\u56fd\\u73b0\\u4ee3\\u5404\\u79cd\\u827a\\u672f\\u6587\\u5316\\u7684\\u91cd\\u8981\\u53d1\\u6e90\\u5730\\u4e4b\\u4e00\\uff0c\\u6bd4\\u5982\\u6447\\u6eda\\u3001\\u73b0\\u4ee3\\u521b\\u610f\\u6587\\u5316\\u7b49\\u7b49\\u3002\\n\\u8001\\u5317\\u4eac\\u5386\\u53f2\\u60a0\\u4e45\\uff0c\\u4f5c\\u4e3a\\u591a\\u4e2a\\u671d\\u4ee3\\u7684\\u90fd\\u57ce\\uff0c\\u591a\\u6837\\u7684\\u5efa\\u7b51\\u98ce\\u683c\\u3001\\u591a\\u5f69\\u7684\\u827a\\u672f\\u751f\\u6d3b\\u3001\\u6df1\\u539a\\u7684\\u4eba\\u6587\\u79ef\\u7d2f\\uff0c\\u9010\\u6e10\\u5f62\\u6210\\u4e86\\u5b83\\u72ec\\u5177\\u7279\\u8272\\u7684\\u4eac\\u57ce\\u98ce\\u683c\\u3002\\u662f\\u4e2d\\u56fd\\u7687\\u5bb6\\u5efa\\u7b51\\u7684\\u96c6\\u5927\\u6210\\u8005\\u3002\\u4f5c\\u4e3a\\u6c11\\u95f4\\u5efa\\u7b51\\u7684\\u5178\\u578b\\u662f\\u56db\\u5408\\u9662\\u3002\"
		},
		\"nationality\": {
			\"desc\": \"\\u5317\\u4eac\\u5e02\\u662f\\u4e2d\\u56fd\\u7b2c\\u4e00\\u4e2a\\u9f50\\u805a56\\u4e2a\\u6c11\\u65cf\\u7684\\u57ce\\u5e02\\uff0c\\u5176\\u4e2d\\u5c11\\u6570\\u6c11\\u65cf\\u4eba\\u53e3\\u4e3a480,384\\u4eba\\u3002\\u5168\\u5e0295.69%\\u4eba\\u53e3\\u4e3a\\u6c49\\u65cf\\uff0c\\u9664\\u6c49\\u65cf\\u5916\\uff0c\\u8499\\u53e4\\u65cf\\u3001\\u6ee1\\u65cf\\u3001\\u56de\\u65cf\\u4eba\\u53e3\\u5747\\u8d85\\u8fc7\\u4e07\\u4eba\\u3002\"
		},
		\"festival\": {
			\"desc\": \"\"
		}
	},
	\"useful\": {
		\"list\": [],
		\"desc\": \"\",
		\"extra\": [],
		\"article\": []
	},
	\"attention\": {
		\"desc\": \"\",
		\"list\": [{
				\"name\": \"\\u6700\\u4f73\\u65c5\\u6e38\\u65f6\\u95f4\",
				\"desc\": \"\\u5317\\u4eac\\u65c5\\u6e38\\u56db\\u5b63\\u7686\\u5b9c\\uff0c\\u4e0d\\u540c\\u5b63\\u8282\\u6709\\u7740\\u5404\\u81ea\\u72ec\\u7279\\u7684\\u6e38\\u89c8\\u666f\\u89c2\\u3002\\n\\u79cb\\u5b63\\u662f\\u5317\\u4eac\\u4e00\\u5e74\\u4e2d\\u6700\\u7f8e\\u4e3d\\u7684\\u5b63\\u8282\\uff0c\\u6b64\\u65f6\\u79cb\\u9ad8\\u6c14\\u723d\\uff0c\\u6c14\\u5019\\u5b9c\\u4eba\\uff0c\\u7a7a\\u6c14\\u8d28\\u91cf\\u6700\\u4f73\\u3002\\u5c24\\u5176\\u662f\\u5341\\u6708\\u4e0b\\u65ec(\\u971c\\u964d\\u524d\\u540e)\\u81f3\\u5341\\u4e00\\u6708\\u4e0a\\u65ec\\uff0c\\u662f\\u7ea2\\u53f6\\u5c42\\u6797\\u5c3d\\u67d3\\u7684\\u65f6\\u5019\\uff0c\\u8457\\u540d\\u7684\\u9999\\u5c71\\u201c\\u7ea2\\u53f6\\u8282\\u201d\\u4e5f\\u5c06\\u5728\\u6b64\\u671f\\u95f4\\u4e3e\\u884c\\u3002\\n\\u53e6\\u4e00\\u4e2a\\u5728\\u5317\\u4eac\\u65c5\\u6e38\\u89c2\\u5149\\u7684\\u597d\\u65f6\\u95f4\\u662f\\uff0c\\u6bcf\\u5e7412\\u6708\\u521d\\u81f3\\u6b21\\u5e742\\u6708\\u4e2d\\u65ec\\uff0c\\u8fd9\\u4e2a\\u65f6\\u5019\\u6765\\u5317\\u4eac\\u5c31\\u4e00\\u5b9a\\u8981\\u53bb\\u5317\\u4eac\\u7684\\u5e99\\u4f1a\\u901b\\u4e00\\u901b\\u3002\\u6b63\\u6708\\u91cc\\uff08\\u519c\\u5386\\u5927\\u5e74\\u4e09\\u5341\\u5230\\u4e8c\\u6708\\u521d\\u4e00\\uff09\\u662f\\u4e3e\\u529e\\u5e99\\u4f1a\\u6700\\u4e3a\\u96c6\\u4e2d\\u7684\\u65e5\\u5b50\\uff0c\\u5382\\u7538\\u3001\\u4e94\\u663e\\u8d22\\u795e\\u5e99\\u3001\\u767d\\u4e91\\u89c2\\u3001\\u96cd\\u548c\\u5bab\\u3001\\u4e1c\\u5cb3\\u5e99\\u3001\\u9f99\\u6f6d\\u6e56\\u7b49\\u90fd\\u4f1a\\u4e3e\\u529e\\u89c4\\u6a21\\u76db\\u5927\\u7684\\u5e99\\u4f1a\\uff0c\\u5904\\u5904\\u4eba\\u5c71\\u4eba\\u6d77\\u3001\\u70ed\\u95f9\\u975e\\u51e1\\uff0c\\u4e00\\u6d3e\\u548c\\u8c10\\u6b22\\u4e50\\u7684\\u666f\\u8c61\\u3002\",
				\"pic_url\": \"\",
				\"pic_id\": \"\",
				\"ext\": \"\"
			}
		],
		\"extra\": [],
		\"article\": [{
				\"name\": \"\\u5317\\u4eac\\u65c5\\u6e38\\u6709\\u95ee\\u5fc5\\u7b54\",
				\"url\": \"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/scene_article\\/2013-01-28\\/1368382880.html\"
			}, {
				\"name\": \"\\u5317\\u4eac\\u65c5\\u6e38\\u7269\\u54c1\\u6e05\\u5355\",
				\"url\": \"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/scene_article\\/2013-01-28\\/1365493519.html\"
			}
		]
	},
	\"leave_info\": \"\",
	\"notes_list_top\": [],
	\"special_tpl_id\": {
		\"id\": \"1\",
		\"version\": \"1\"
	},
	\"hot_scene_show_type\": {
		\"type\": \"1\"
	},
	\"visit_time\": {
		\"desc\": \"\\u5317\\u4eac\\u65c5\\u6e38\\u56db\\u5b63\\u7686\\u5b9c\\uff0c\\u4e0d\\u540c\\u5b63\\u8282\\u6709\\u7740\\u5404\\u81ea\\u72ec\\u7279\\u7684\\u6e38\\u89c8\\u666f\\u89c2\\u3002\\r\\n\\u79cb\\u5b63\\u662f\\u5317\\u4eac\\u4e00\\u5e74\\u4e2d\\u6700\\u7f8e\\u4e3d\\u7684\\u5b63\\u8282\\uff0c\\u6b64\\u65f6\\u79cb\\u9ad8\\u6c14\\u723d\\uff0c\\u6c14\\u5019\\u5b9c\\u4eba\\uff0c\\u7a7a\\u6c14\\u8d28\\u91cf\\u6700\\u4f73\\u3002\\u5c24\\u5176\\u662f\\u5341\\u6708\\u4e0b\\u65ec(\\u971c\\u964d\\u524d\\u540e)\\u81f3\\u5341\\u4e00\\u6708\\u4e0a\\u65ec\\uff0c\\u662f\\u7ea2\\u53f6\\u5c42\\u6797\\u5c3d\\u67d3\\u7684\\u65f6\\u5019\\uff0c\\u8457\\u540d\\u7684\\u9999\\u5c71\\u201c\\u7ea2\\u53f6\\u8282\\u201d\\u4e5f\\u5c06\\u5728\\u6b64\\u671f\\u95f4\\u4e3e\\u884c\\u3002\\r\\n\\u53e6\\u4e00\\u4e2a\\u5728\\u5317\\u4eac\\u65c5\\u6e38\\u89c2\\u5149\\u7684\\u597d\\u65f6\\u95f4\\u662f\\uff0c\\u6bcf\\u5e7412\\u6708\\u521d\\u81f3\\u6b21\\u5e742\\u6708\\u4e2d\\u65ec\\uff0c\\u8fd9\\u4e2a\\u65f6\\u5019\\u6765\\u5317\\u4eac\\u5c31\\u4e00\\u5b9a\\u8981\\u53bb\\u5317\\u4eac\\u7684\\u5e99\\u4f1a\\u901b\\u4e00\\u901b\\u3002\\u6b63\\u6708\\u91cc\\uff08\\u519c\\u5386\\u5927\\u5e74\\u4e09\\u5341\\u5230\\u4e8c\\u6708\\u521d\\u4e00\\uff09\\u662f\\u4e3e\\u529e\\u5e99\\u4f1a\\u6700\\u4e3a\\u96c6\\u4e2d\\u7684\\u65e5\\u5b50\\uff0c\\u5382\\u7538\\u3001\\u4e94\\u663e\\u8d22\\u795e\\u5e99\\u3001\\u767d\\u4e91\\u89c2\\u3001\\u96cd\\u548c\\u5bab\\u3001\\u4e1c\\u5cb3\\u5e99\\u3001\\u9f99\\u6f6d\\u6e56\\u7b49\\u90fd\\u4f1a\\u4e3e\\u529e\\u89c4\\u6a21\\u76db\\u5927\\u7684\\u5e99\\u4f1a\\uff0c\\u5904\\u5904\\u4eba\\u5c71\\u4eba\\u6d77\\u3001\\u70ed\\u95f9\\u975e\\u51e1\\uff0c\\u4e00\\u6d3e\\u548c\\u8c10\\u6b22\\u4e50\\u7684\\u666f\\u8c61\\u3002\"
	},
	\"new_geography_history\": {
		\"desc\": \"\",
		\"list\": [{
				\"name\": \"\\u5730\\u7406\\u6c14\\u5019\",
				\"desc\": \"\\u5730\\u7406\\uff1a\\n\\u5317\\u4eac\\u4f4d\\u4e8e\\u534e\\u5317\\u5e73\\u539f\\u897f\\u5317\\u8fb9\\u7f18\\u3002\\u6bd7\\u90bb\\u6e24\\u6d77\\u6e7e\\uff0c\\u4e0a\\u9760\\u8fbd\\u4e1c\\u534a\\u5c9b\\uff0c\\u4e0b\\u4e34\\u5c71\\u4e1c\\u534a\\u5c9b\\u3002\\u5317\\u4eac\\u4e0e\\u5929\\u6d25\\u76f8\\u90bb\\uff0c\\u5e76\\u4e0e\\u5929\\u6d25\\u4e00\\u8d77\\u88ab\\u6cb3\\u5317\\u7701\\u73af\\u7ed5\\u3002\\u897f\\u90e8\\u662f\\u592a\\u884c\\u5c71\\u5c71\\u8109\\u4f59\\u8109\\u7684\\u897f\\u5c71\\uff0c\\u5317\\u90e8\\u662f\\u71d5\\u5c71\\u5c71\\u8109\\u7684\\u519b\\u90fd\\u5c71\\uff0c\\u4e24\\u5c71\\u5728\\u5357\\u53e3\\u5173\\u6c9f\\u76f8\\u4ea4\\uff0c\\u5f62\\u6210\\u4e00\\u4e2a\\u5411\\u4e1c\\u5357\\u5c55\\u5f00\\u7684\\u534a\\u5706\\u5f62\\u5927\\u5c71\\u5f2f\\uff0c\\u4eba\\u4eec\\u79f0\\u4e4b\\u4e3a\\u201c\\u5317\\u4eac\\u5f2f\\u201d\\uff0c\\u5b83\\u6240\\u56f4\\u7ed5\\u7684\\u5c0f\\u5e73\\u539f\\u5373\\u4e3a\\u5317\\u4eac\\u5c0f\\u5e73\\u539f\\u3002\\u8bda\\u5982\\u53e4\\u4eba\\u6240\\u8a00\\uff1a\\u201c\\u5e7d\\u5dde\\u4e4b\\u5730\\uff0c\\u5de6\\u73af\\u6ca7\\u6d77\\uff0c\\u53f3\\u62e5\\u592a\\u884c\\uff0c\\u5317\\u6795\\u5c45\\u5eb8\\uff0c\\u5357\\u895f\\u6cb3\\u6d4e\\uff0c\\u8bda\\u5929\\u5e9c\\u4e4b\\u56fd\\u201d\\u3002\\u5168\\u5e02\\u5e73\\u5747\\u6d77\\u62d443.5\\u7c73\\u3002\\u5317\\u4eac\\u5e73\\u539f\\u7684\\u6d77\\u62d4\\u9ad8\\u5ea6\\u572820-60\\u7c73\\uff0c\\u5c71\\u5730\\u4e00\\u822c\\u6d77\\u62d41000-1500\\u7c73\\u3002\\n\\u6c14\\u5019\\uff1a\\n\\u5317\\u4eac\\u7684\\u6c14\\u5019\\u4e3a\\u5178\\u578b\\u7684\\u6696\\u6e29\\u5e26\\u534a\\u6e7f\\u6da6\\u5927\\u9646\\u6027\\u5b63\\u98ce\\u6c14\\u5019\\uff0c\\u590f\\u5b63\\u9ad8\\u6e29\\u591a\\u96e8\\uff0c\\u51ac\\u5b63\\u5bd2\\u51b7\\u5e72\\u71e5\\uff0c\\u6625\\u3001\\u79cb\\u77ed\\u4fc3\\u3002\\u5168\\u5e74\\u65e0\\u971c\\u671f180\\u81f3200\\u5929\\uff0c\\u897f\\u90e8\\u5c71\\u533a\\u8f83\\u77ed\\u30022007\\u5e74\\u5e73\\u5747\\u964d\\u96e8\\u91cf483.9\\u6beb\\u7c73\\uff0c\\u4e3a\\u534e\\u5317\\u5730\\u533a\\u964d\\u96e8\\u6700\\u591a\\u7684\\u5730\\u533a\\u4e4b\\u4e00\\u3002\\u964d\\u6c34\\u5b63\\u8282\\u5206\\u914d\\u5f88\\u4e0d\\u5747\\u5300\\uff0c\\u5168\\u5e74\\u964d\\u6c34\\u768480%\\u96c6\\u4e2d\\u5728\\u590f\\u5b636\\u30017\\u30018\\u4e09\\u4e2a\\u6708\\uff0c7\\u30018\\u6708\\u6709\\u5927\\u96e8\\u3002\",
				\"pic_url\": \"\",
				\"pic_id\": \"\",
				\"ext\": \"\"
			}
		],
		\"extra\": [],
		\"article\": []
	},
	\"ticket_info\": {
		\"list\": [{
				\"name\": \"\\u5f00\\u653e\\u65f6\\u95f4\\u63cf\\u8ff0\",
				\"desc\": \"\"
			}, {
				\"name\": \"\\u95e8\\u7968\\u63cf\\u8ff0\",
				\"desc\": \"\"
			}
		]
	},
	\"unmissable\": {
		\"list\": [{
				\"name\": \"\\u6545\\u5bab\",
				\"url\": \"http:\\/\\/lvyou.baidu.com\\/scene\\/view\\/6208c401f1153f0fd41f74fe\",
				\"desc\": \"\\u7ea2\\u7ea2\\u7684\\u5bab\\u5899\\uff0c\\u91d1\\u9ec4\\u7684\\u7409\\u7483\\uff0c\\u5c3d\\u663e\\u7687\\u5bb6\\u98ce\\u8303\\u3002\\u9690\\u85cf\\u7740\\u539a\\u91cd\\u5386\\u53f2\\u7684\\u7d2b\\u7981\\u57ce\\uff0c\\u591a\\u5c11\\u7a7f\\u8d8a\\u7684\\u68a6\\u60f3\\u5728\\u8fd9\\u91cc\\u5b9e\\u73b0\\u3002\",
				\"pic_url\": \"6a600c338744ebf8659d9d9ed9f9d72a6159a7a7\",
				\"pic_id\": \"6f4be17362ffb1a2d91b495c\",
				\"ext\": {
					\"width\": \"315\",
					\"height\": \"210\",
					\"size\": \"57553\"
				}
			}
		],
		\"more\": \"0\",
		\"center\": {
			\"lat\": \"40.143937\",
			\"lng\": \"116.257899\"
		},
		\"zoom\": \"10\"
	},
	\"relate_scene\": {
		\"list\": [\"289d2b074d001b3184b27ef7\", \"9bb8ee381df41344144463f5\", \"cb118915309ea171641416f7\", \"da666bc57594baeb76b3bcf0\"]
	},
	\"highlight\": {
		\"list\": [{
				\"pic_id\": \"87894\",
				\"pic_url\": \"962bd40735fae6cd6cb152c00fb30f2442a70f0d\"
			}
		]
	},
	\"around_scene\": {
		\"list\": [\"cc11463263cf7ae3b9d4dff3\", \"5ee28727464640351f1219db\", \"1ff5663ee7c8273681fae9f3\", \"81a899d28a59bdddd1b802e4\"]
	},
	\"around_map\": {
		\"center\": {
			\"lat\": \"40.106816\",
			\"lng\": \"117.578354\"
		},
		\"zoom\": \"6\"
	},
	\"new_line\": {
		\"list\": [{
				\"name\": \"\\u4f11\\u95f2\\u4e00\\u65e5\\u6e38\",
				\"desc\": \"\\u5982\\u679c\\u53ea\\u6709\\u4e00\\u5929\\u65f6\\u95f4\\uff0c\\u5efa\\u8bae\\u53ea\\u5728\\u57ce\\u533a\\u5185\\u6d3b\\u52a8\\u3002\\u65e9\\u4e0a\\u901b\\u901b\\u6545\\u5bab\\u611f\\u53d7\\u5386\\u53f2\\uff0c\\u4e0b\\u5348\\u5728\\u540e\\u6d77\\u8fb9\\u6652\\u6652\\u592a\\u9633\\u559d\\u559d\\u8336\\u6587\\u827a\\u4e00\\u4e0b\\uff0c\\u665a\\u4e0a\\u5230\\u4e09\\u91cc\\u5c6f\\u653e\\u677e\\u5fc3\\u60c5\\u3002\",
				\"path\": [{
						\"path\": [{
								\"sname\": \"\\u6545\\u5bab\",
								\"sid\": \"6208c401f1153f0fd41f74fe\",
								\"map_x\": \"12958130.026685\",
								\"map_y\": \"4826652.513939\",
								\"surl\": \"gugong\"
							}, {
								\"sname\": \"\\u540e\\u6d77\",
								\"sid\": \"b92e706693d2d06f5707d5c1\",
								\"map_x\": \"12957576.985437\",
								\"map_y\": \"4830412.041019\",
								\"surl\": \"houhai\"
							}, {
								\"sname\": \"\\u4e09\\u91cc\\u5c6f\",
								\"sid\": \"51c63e2b6dde39224b57e2fd\",
								\"map_x\": \"12964316.786021\",
								\"map_y\": \"4829918.737933\",
								\"surl\": \"sanlitun\"
							}
						],
						\"desc\": \"\\u6545\\u5bab\\u63a8\\u8350\\u53ea\\u8d70\\u4e2d\\u8f74\\u7ebf\\uff0c\\u5927\\u69823\\u4e2a\\u6765\\u5c0f\\u65f6\\u53ef\\u901b\\u5b8c\\u3002\\u4ece\\u5357\\u95e8\\u8fdb\\u5317\\u95e8\\u51fa\\uff0c\\u4e2d\\u5348\\u53ef\\u5728\\u666f\\u5c71\\u9644\\u8fd1\\u5403\\u4e2a\\u996d\\u3002\\u4e0b\\u5348\\u6cbf\\u80e1\\u540c\\u95f2\\u901b\\u81f3\\u540e\\u6d77\\uff0c\\u901b\\u7d2f\\u4e86\\uff0c\\u968f\\u4fbf\\u627e\\u4e00\\u5bb6\\u559c\\u6b22\\u7684\\u5496\\u5561\\u9986\\u5750\\u5728\\u4ec0\\u5239\\u6d77\\u8fb9\\u6652\\u6652\\u592a\\u9633\\uff0c\\u559d\\u559d\\u8336\\u3002\\u540e\\u6d77\\u5c31\\u5728\\u9f13\\u697c\\u9644\\u8fd1\\uff0c\\u9f13\\u697c\\u4e00\\u5e26\\u6700\\u80fd\\u4f53\\u73b0\\u8001\\u5317\\u4eac\\u7684\\u5473\\u9053\\u3002\\u665a\\u4e0a\\u53bb\\u8457\\u540d\\u7684\\u4e09\\u91cc\\u5c6f\\u901b\\u901b\\u3002\\u4e09\\u91cc\\u5c6f\\u9664\\u4e86\\u9152\\u5427\\u8857\\u8fd8\\u6709Village\\u7b49\\u5546\\u4e1a\\u533a\\uff0cVillage\\u5357\\u533a\\u7684\\u54c1\\u724c\\u76f8\\u5bf9\\u4eb2\\u6c11\\uff0c\\u5317\\u533a\\u7684\\u54c1\\u724c\\u591a\\u4e3a\\u5962\\u4f88\\u54c1\\u3002\",
						\"repeat_times\": \"\",
						\"nickname_path\": [],
						\"dinning\": \"\\u4ece\\u9f13\\u697c\\u4e1c\\u5927\\u8857\\u5750107\\u8def\\u516c\\u4ea4\\u53ef\\u5230\\u7c0b\\u8857\\u3002\\u7c0b\\u8857\\u662f\\u5317\\u4eac\\u8457\\u540d\\u7684\\u9910\\u996e\\u4e00\\u6761\\u8857\\uff0c\\u8857\\u4e24\\u65c1\\u6302\\u6ee1\\u7ea2\\u706f\\u7b3c\\uff0c\\u70ed\\u95f9\\u975e\\u5e38\\u3002\\u4e3b\\u8981\\u6709\\u5ddd\\u83dc\\u3001\\u70e4\\u4e32\\u3001\\u998b\\u5634\\u86d9\\u3001\\u9999\\u8fa3\\u87f9\\u3001\\u706b\\u9505\\u7b49\\u7b49\\u3002\",
						\"accordination\": \"\\u9f13\\u97f5\\u9752\\u5e74\\u65c5\\u820d\\n\\u5730\\u5740\\uff1a\\u5317\\u4eac\\u5e02\\u897f\\u57ce\\u533a\\u65e7\\u9f13\\u697c\\u5927\\u885751\\u53f7\\n\\u7279\\u8272\\uff1a2011\\u5e74\\u91cd\\u65b0\\u88c5\\u4fee\\u8fc7\\uff0c\\u670d\\u52a1\\u5458\\u90fd\\u662f\\u70ed\\u60c5\\u7684\\u85cf\\u65cf\\u5c0f\\u59d1\\u5a18\\uff01\\u79bb\\u9f13\\u697c\\u3001\\u540e\\u6d77\\u6b65\\u884c\\u53ea\\u67095-10\\u5206\\u949f\\u3002\\n\\u4ef7\\u683c\\uff1a\\u5355\\u4eba\\u95f4170\\u5143\\uff0c\\u4e8c\\u4eba\\u95f4240\\u5143\\uff0c\\u4e09\\u4eba\\u95f4260\\u5143\\uff0c\\u56db\\u4eba\\u95f465\\u5143\\/\\u4eba\\uff0c\\u516d\\u4eba\\u95f455\\u5143\\/\\u4eba\\u3002\\n\\u7535\\u8bdd\\uff1a010-64037702\\/64039907\\n\\u600e\\u4e48\\u53bb\\uff1a\\u5730\\u94c12\\u53f7\\u7ebf\\u5230\\u9f13\\u697c\\u5927\\u8857\\u7ad9B\\u53e3\\u51fa\\u7ad9\\uff0c\\u5f80\\u5357\\u8d70300\\u7c73\\u3002\",
						\"tips\": \"\",
						\"tdyou_sid\": \"\",
						\"pic_url\": \"203fb80e7bec54e7490d2e99b9389b504ec26a57\",
						\"pic_id\": \"e52032e021eb7bc6439bb290\",
						\"ext\": {
							\"width\": \"363\",
							\"height\": \"244\",
							\"size\": \"38986\",
							\"upload_uid\": \"694267138\",
							\"upload_uname\": \"\\u6817\\u5c0f\\u745c\"
						}
					}
				],
				\"pic_url\": \"\",
				\"pic_id\": \"\",
				\"ext\": \"\",
				\"keyword\": \"\\u7687\\u5bb6\\u6587\\u5316 \\u60c5\\u8c03 \\u65f6\\u5c1a\",
				\"bigPath\": \"0\"
			}
		],
		\"desc\": \"\"
	},
	\"video\": {
		\"list\": [{
				\"name\": \"\\u5317\\u4eac\\u65c5\\u6e38\\u5ba3\\u4f20\\u7247\",
				\"code\": \"<\\/embed>\",
				\"pic_url\": \"bd3eb13533fa828bd70a9741fd1f4134970a5a62\",
				\"pic_id\": \"06a57946b91081fc5d310150\",
				\"ext\": {
					\"width\": \"250\",
					\"height\": \"150\",
					\"size\": \"17057\"
				}
			}
		]
	},
	\"plane_ticket\": {
		\"info\": {
			\"is_shown\": \"1\",
			\"sname\": \"\",
			\"bdstoken\": \"0\"
		}
	},
	\"news\": {
		\"article\": [],
		\"list\": [{
				\"name\": \"\\u5317\\u4eac\\u5de5\\u4f53\\u51b0\\u96ea\\u5609\\u5e74\",
				\"url\": \"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/scene_article\\/2013-02-04\\/1360624281.html\",
				\"end_time\": \"2013-02-18\"
			}
		]
	},
	\"topic\": {
		\"list\": []
	},
	\"partner\": {
		\"list\": [{
				\"name\": \"\\u5317\\u4eac\\u65c5\\u6e38\\u7f51\",
				\"url\": \"http:\\/\\/www.visitbeijing.com.cn\\/\",
				\"pic_url\": \"d6ca7bcb0a46f21ff0b89dc9f6246b600d33ae98\",
				\"pic_id\": \"ba7e23d12edee0c8e583c493\",
				\"ext\": {
					\"width\": \"216\",
					\"height\": \"60\",
					\"size\": \"8971\",
					\"upload_uid\": \"71703881\",
					\"upload_uname\": \"marie323\"
				}
			}
		]
	},
	\"tag\": {
		\"season\": \"1%E6%9C%88%269%E6%9C%88%2610%E6%9C%88%2611%E6%9C%88%26%E7%A7%8B%E5%A4%A9%26%E4%B8%AD%E7%A7%8B%26%E5%8D%81%E4%B8%80\",
		\"area\": \"%E5%9B%BD%E5%86%85%26%E4%B8%9C%E5%8D%97%E4%BA%9A\",
		\"landscape\": \"%E5%9F%8E%E5%B8%82%26%E4%BA%BA%E6%96%87%E6%99%AF%E8%A7%82\",
		\"theme\": \"%E4%BA%B2%E5%AD%90%26%E7%8B%AC%E8%A1%8C%26%E6%91%84%E5%BD%B1%26%E7%BE%8E%E9%A3%9F%26%E8%B4%AD%E7%89%A9%26%E6%BB%91%E9%9B%AA%26%E5%8E%86%E5%8F%B2%26%E8%89%BA%E6%9C%AF%26%E6%B3%A1%E5%90%A7%26%E5%AE%B6%E5%BA%AD%26%E6%83%85%E4%BE%A3%26SPA%26%E6%AF%95%E4%B8%9A%E6%97%85%E8%A1%8C%26%E5%A4%95%E9%98%B3%E7%BA%A2\",
		\"bdstoken\": \"0\"
	},
	\"guide\": {
		\"gid0\": \"4fec4414f7ea812e5e7d8cd5\",
		\"gid1\": \"\",
		\"gid2\": \"\",
		\"gid3\": \"\",
		\"bdstoken\": \"0\"
	}
}','method'=>'GET'),
    array('aid'=>54,'url'=>'/ajax/plan/planpool/save','module_name'=>'plan','description'=>'【异步】用户收集内容加入到计划池','params'=>'{
    \"datas[1]\" : \"{\'type\':\'1\',\'content\':\'\'}\",
    \"datas[1]#\": \"type=1表示目的地,content是sid\",
    \"datas[2]\" : \"{\'type\':\'2\',\'content\':\'\'}\",
    \"datas[2]#\": \"type=1表示目的地,content是poid\",
    \"datas[3]\" : \"{\'type\':\'3\',\'content\':\'\'}\",
    \"datas[3]#\": \"type=1表示目的地,content是word,url,title\"
}','response'=>'{    
   \"data\":{
       \"list\":[
           {
               \"sname\":\"丽江\",
               \"surl\":\"\",
               \"sid\":\"\",
               \"star_level\":5,
               \"count\":2,
               \"scene_list\":[
                   {
                       \"type\":1,
                       \"id\":\"\",
                       \"name\":\"景点或poi点名称\",
                       \"sid\":\"\",
                       \"url\":\"surl\",
                       \"star_level\":5
                   }
                ],
                \"word_list\":[
                    {
                       \"type\":3,
                       \"id\":\"\",
                       \"content\":\"攻略内容\",
                       \"title\":\"攻略来源标题\",
                       \"url\":\"来源地址\"
                    }
                ]
           },{
               \"count\":2,
                \"word_list\":[
                    {
                       \"type\":3,
                       \"id\":\"\",
                       \"content\":\"攻略内容\",
                       \"title\":\"攻略来源标题\",
                       \"url\":\"来源地址\"
                    }
                ]
           }
        ]
   }
}','method'=>'POST'),
    array('aid'=>55,'url'=>'/ajax/plan/planpool/delete','module_name'=>'plan','description'=>'【异步】删除计划池内容','params'=>'{
    \"type\":1,
    \"type#\":\"0代表清空,1代表删除部分\",
    \"ids[1]\":\"id1\",
    \"ids[1]#\":\"要删除的部分的id\",
    \"ids[2]\":\"id2\"
}','response'=>'{
    \"errno\":0
}','method'=>'POST'),
    array('aid'=>56,'url'=>'/ajax/plan/create','module_name'=>'plan','description'=>'【异步】从计划池选取创建计划','params'=>'{
    \"ids[1]\":\"id1\",
    \"ids[1]#\":\"要删除的部分的id\",
    \"ids[2]\":\"id2\"
}','response'=>'{
    \"errno\":0,
    \"plan_id\" : \"创建成功返回的计划id\"    
}','method'=>'POST'),
    array('aid'=>57,'url'=>'/destination/ajax/plan/getscenelist','module_name'=>'plan','description'=>'【异步】获取景点列表数据','params'=>'{
    \"plan_id\":\"计划id\",
    \"sid\":\"目的地id\",
    \"pn\": 75,
    \"pn#\": \"从第几个景点获取数据\",
    \"rn\": 15,
    \"rn#\": \"每页获取的景点数\"
}','response'=>'{
    \"plan_id\":\"\",
    \"title\":\"计划名称\",
    \"name\":\"目的地名称\",
    \"list\":[
        {
            \"type\":\"1代表景点\",
            \"sname\":\"景点名称\",
            \"surl\":\"\",
            \"has_son\":1,
            \"star_level\":5,
            \"ticket\": \"门票\",
            \"address\": \"地址\",
            \"opentime\": \"开放时间\",
            \"travel_time\":\"建议游玩时间\",
            \"is_unmissable\":1,
            \"is_china\":\"是国内还是国外景点\",
            \"is_correct\":\"是否属于收集\",
            \"map_x\": \"12944048.403162\",
            \"map_y\": \"4838154.5509082\",
            \"pic_url\": \"封面图片地址\",
            \"ext\": {
                \"width\": 1024,
                \"height\": 683
            }
        },
        {
            \"type\":2,
            \"name\":\"poi点名称\",
            \"url\":\"\",
            \"star_level\":5,
            \"is_china\":\"是国内poi还是国外poi\",
            \"is_correct\":\"是否属于收集\",
            \"map_x\": \"12944048.403162\",
            \"map_y\": \"4838154.5509082\",
            \"pic_url\": \"图片地址\",
            \"ext\": {
                \"width\": 1024,
                \"height\": 683
            }
        }
    ]
}','method'=>'GET'),
    array('aid'=>58,'url'=>'/ajax/plan/getplanlist','module_name'=>'plan','description'=>'【异步】获取计划列表数据','params'=>'{
    \"plan_id\":\"计划id\",
    \"type\":\"1代表行程计划，2代表小贴士\"
}','response'=>'{
    \"data\":\"出发时间\",
    \"plan_list\":[
        {
           \"id\":\"天的id\",
           \"index\":\"第几天\",
           \"list\": [
                {
                    \"id\":\"某一项id\",
                    \"type\": \"1代表景点\",
                    \"sname\": \"景点名称\",
                    \"sid\":\"\",
                    \"surl\": \"\",
                    \"has_son\": 1,
                    \"star_level\": 5,
                    \"ticket\": \"门票\",
                    \"address\": \"地址\",
                    \"opentime\": \"开放时间\",
                    \"travel_time\": \"建议游玩时间\",
                    \"is_unmissable\": 1,
                    \"is_china\": \"是国内还是国外景点\",
                    \"is_correct\": \"是否属于收集\",
                    \"map_x\": \"12944048.403162\",
                    \"map_y\": \"4838154.5509082\",
                    \"pic_url\": \"封面图片地址\",
                    \"ext\": {
                        \"width\": 1024,
                        \"height\": 683
                    },
                    \"path_type\":\"0代表无，1代表飞机，2代表火车，3代表公汽，4代表自驾，5代表步行\"
                },
                {
                    \"id\":\"某一项id\",
                    \"type\": \"2代表poi点\",
                    \"name\": \"poi点名称\",
                    \"poi_id\":\"\",
                    \"url\": \"\",
                    \"star_level\": 5,
                    \"is_china\": \"是国内poi还是国外poi\",
                    \"is_correct\": \"是否属于收集\",
                    \"map_x\": \"12944048.403162\",
                    \"map_y\": \"4838154.5509082\",
                    \"pic_url\": \"图片地址\",
                    \"ext\": {
                        \"width\": 1024,
                        \"height\": 683
                    },
                    \"path_type\":\"0代表无，1代表飞机，2代表火车，3代表公汽，4代表自驾，5代表步行\"
                }
            ]
        }
    ]    
}','method'=>'GET'),
    array('aid'=>59,'url'=>'/ajax/plan/addtoplan','module_name'=>'plan','description'=>'【异步】添加点到计划','params'=>'{
    \"plan_id\":\"计划id\",
    \"type\":\"1景点,2poi点\",
    \"xid\":\"sid 或者poi_id\",
    \"target\":\"0为队首,其他为计划中点的id\"
}','response'=>'{
    \"errno\":0    
}','method'=>'POST'),
    array('aid'=>60,'url'=>'/user/dream/{%$uid%}','module_name'=>'user','description'=>'梦想旅行家浏览页','params'=>'{}','response'=>'{
    \"msg\":\"\",
    \"errno\":\"\",
    \"user\":{},
    \"dreamer\":{

    },
    \"works_list\":[
        {
    	\"type\": \"0/1 number类型 0游记 1画册\",
    	\"nid\":\"游记id\",
    	\"pid\":\"画册id  根据type取nid或者pid拼链接：type=0时pid为空字符串，type=1时nid为空字符串\",
    	\"title\":\"游记 or 画册标题\",  
    	\"cover_pic\":{
            \"pic_url\":\"b812c8fcc3cec3fd2bc96187d788d43f86942749\",
            \"pic_id\":2272766,
            \"ext\":{\"width\":571,\"height\":800,\"size\":134172}
            },
    	\"view_count\":\"number类型，浏览数\"
        }
    ],
    \"headpic\":\"头图地址 cms提交\",
    \"total_reply_count\": \"number类型，留言板总回复数\", 
}
','method'=>'GET'),
    array('aid'=>61,'url'=>'/mis/remark/audit','module_name'=>'mis','description'=>'点评审核后台-展示审核列表','params'=>'{
    \"pn\": 10,
    \"rn\": 10,
    \"sname\": \"查找的地点\"
}
    ','response'=>'{
    \"user\": {
        \"username\": \"lv00_1\",
        \"uname\": \"lv00_1\",
        \"uid\": \"6272b2069fd831c240a00f5e\",
        \"nickname\": \"lv00_1\",
        \"avatar_source\": \"1\",
        \"avatar_large\": \"90816c7630305f31ec0b\",
        \"avatar_middle\": \"90816c7630305f31ec0b\",
        \"avatar_small\": \"90816c7630305f31ec0b\",
        \"self_introduction\": \"\",
        \"location_sid\": \"0\",
        \"location\": \"\",
        \"preferences\": [],
        \"is_blocked\": 0,
        \"user_level\": \"0\",
        \"owner_level\": \"0\",
        \"admin_level\": \"2\",
        \"is_audited\": 1,
        \"trust_level\": \"0\",
        \"score\": \"1503\",
        \"wealth\": \"505\",
        \"praise_count\": \"6\",
        \"notes_count\": \"1\",
        \"notes_count_total\": \"2\",
        \"recommend_count\": \"89\",
        \"common_posts_count\": \"2\",
        \"going_count\": \"2\",
        \"gone_count\": \"0\",
        \"version_count\": \"0\",
        \"create_time\": \"1346896225\",
        \"update_time\": \"1375063449\",
        \"last_login_time\": \"1374665432\",
        \"recommend_notes_count\": \"0\",
        \"travel_count\": \"0\",
        \"travel_posts_count\": \"0\",
        \"travel_replys_count\": \"0\",
        \"foot_print_count\": \"0\",
        \"trip_route_count\": \"0\",
        \"be_recommended_count\": \"0\",
        \"favorite_count\": \"17\",
        \"pic_travel_count\": 10,
        \"is_admin\": 1,
        \"is_owner\": 0,
        \"is_daren\": 0,
        \"is_famous\": 0,
        \"is_reply_trust\": 0,
        \"has_login_record\": 1,
        \"app_has_login_record\": 1,
        \"reply_day_count\": \"2\",
        \"is_activated\": 1,
        \"has_uname\": 1,
        \"is_bindemail\": 1,
        \"usersource\": 0,
        \"is_bundle\": 0,
        \"login_src\": 0,
        \"bdstoken\": \"5b3fe6b69cd92433375feabffd5ca49b\",
        \"is_login\": 1
    },
    \"remark_list\": [
        {
            \"remark_id\": \"bbdlkfjiu07v9sd6f89\",
            \"type\": \"1\",
            \"sname\": \"北京\",
            \"words\": \"帝都天气真不好>_<\",
            \"create_time\": \"1375799800\",
            \"uid\": \"bbfd6d1df0dedf1e815e75b2\",
            \"user_nickname\": \"lvyou01\",
            \"uip\": \"987sf9s698f7s97f9s7f\",
            \"pic_count\": 10,
            \"pic_list\": [
                {
                    \"remark_pic_id\": \"dgfhfjg4766798798\",
                    \"pic_url\": \"b3fb43166d224f4aec312ae208f790529922d193\"
                },
                {
                    \"remark_pic_id\": \"sldfos86969sdf9sdfsdfs\",
                    \"pic_url\": \"7a899e510fb30f243832b5f2c995d143ac4b0392\"
                }
            ]
        }
    ],
    \"total\": \"902626\",
    \"pagelist\": []
}','method'=>'GET'),
    array('aid'=>62,'url'=>'mis/remark/pass','module_name'=>'mis','description'=>'点评审核后台-审核通过页','params'=>'{
    \"pn\": 10,
    \"rn\": 10,
    \"sname\": \"查找的地点\"
}','response'=>'{
    \"user\": {
        \"username\": \"lv00_1\",
        \"uname\": \"lv00_1\",
        \"uid\": \"6272b2069fd831c240a00f5e\",
        \"nickname\": \"lv00_1\",
        \"avatar_source\": \"1\",
        \"avatar_large\": \"90816c7630305f31ec0b\",
        \"avatar_middle\": \"90816c7630305f31ec0b\",
        \"avatar_small\": \"90816c7630305f31ec0b\",
        \"self_introduction\": \"\",
        \"location_sid\": \"0\",
        \"location\": \"\",
        \"preferences\": [],
        \"is_blocked\": 0,
        \"user_level\": \"0\",
        \"owner_level\": \"0\",
        \"admin_level\": \"2\",
        \"is_audited\": 1,
        \"trust_level\": \"0\",
        \"score\": \"1503\",
        \"wealth\": \"505\",
        \"praise_count\": \"6\",
        \"notes_count\": \"1\",
        \"notes_count_total\": \"2\",
        \"recommend_count\": \"89\",
        \"common_posts_count\": \"2\",
        \"going_count\": \"2\",
        \"gone_count\": \"0\",
        \"version_count\": \"0\",
        \"create_time\": \"1346896225\",
        \"update_time\": \"1375063449\",
        \"last_login_time\": \"1374665432\",
        \"recommend_notes_count\": \"0\",
        \"travel_count\": \"0\",
        \"travel_posts_count\": \"0\",
        \"travel_replys_count\": \"0\",
        \"foot_print_count\": \"0\",
        \"trip_route_count\": \"0\",
        \"be_recommended_count\": \"0\",
        \"favorite_count\": \"17\",
        \"pic_travel_count\": 10,
        \"is_admin\": 1,
        \"is_owner\": 0,
        \"is_daren\": 0,
        \"is_famous\": 0,
        \"is_reply_trust\": 0,
        \"has_login_record\": 1,
        \"app_has_login_record\": 1,
        \"reply_day_count\": \"2\",
        \"is_activated\": 1,
        \"has_uname\": 1,
        \"is_bindemail\": 1,
        \"usersource\": 0,
        \"is_bundle\": 0,
        \"login_src\": 0,
        \"bdstoken\": \"5b3fe6b69cd92433375feabffd5ca49b\",
        \"is_login\": 1
    },
    \"remark_list\": [
        {
            \"remark_id\": \"sdg98sf8s76ds5d7s65f\",
            \"type\": \"1\",
            \"sname\": \"北京\",
            \"words\": \"帝都天气真不好>_<\",
            \"create_time\": \"1375799800\",
            \"audit_time\": \"1376899999\",
            \"uid\": \"bbfd6d1df0dedf1e815e75b2\",
            \"user_nickname\": \"\",
            \"uip\": \"\",
            \"audit_uid\": \"bbfd6l23jlh43ljf1e815e75b2\",
            \"audit_uname\": \"管理员1号\",
            \"pic_count\": 10,
            \"pic_list\": [
                {
                    \"remark_pic_id\": \"sldfos86969sdf9sdfsdfs\",
                    \"pic_url\": \"b3fb43166d224f4aec312ae208f790529922d193\"
                },
                {
                    \"remark_pic_id\": \"sldfos86969sdf9sdfsdfs\",
                    \"pic_url\": \"7a899e510fb30f243832b5f2c995d143ac4b0392\"
                }
            ]
        }
    ],
    \"total\": \"902626\",
    \"pagelist\": []
}','method'=>'GET'),
    array('aid'=>63,'url'=>'mis/remark/delete','module_name'=>'mis','description'=>'点评审核后台-已删除列表','params'=>'{
    \"pn\": 10,
    \"rn\": 10,
    \"sname\": \"查找的地点\"
}','response'=>'{
    \"user\": {
        \"username\": \"lv00_1\",
        \"uname\": \"lv00_1\",
        \"uid\": \"6272b2069fd831c240a00f5e\",
        \"nickname\": \"lv00_1\",
        \"avatar_source\": \"1\",
        \"avatar_large\": \"90816c7630305f31ec0b\",
        \"avatar_middle\": \"90816c7630305f31ec0b\",
        \"avatar_small\": \"90816c7630305f31ec0b\",
        \"self_introduction\": \"\",
        \"location_sid\": \"0\",
        \"location\": \"\",
        \"preferences\": [],
        \"is_blocked\": 0,
        \"user_level\": \"0\",
        \"owner_level\": \"0\",
        \"admin_level\": \"2\",
        \"is_audited\": 1,
        \"trust_level\": \"0\",
        \"score\": \"1503\",
        \"wealth\": \"505\",
        \"praise_count\": \"6\",
        \"notes_count\": \"1\",
        \"notes_count_total\": \"2\",
        \"recommend_count\": \"89\",
        \"common_posts_count\": \"2\",
        \"going_count\": \"2\",
        \"gone_count\": \"0\",
        \"version_count\": \"0\",
        \"create_time\": \"1346896225\",
        \"update_time\": \"1375063449\",
        \"last_login_time\": \"1374665432\",
        \"recommend_notes_count\": \"0\",
        \"travel_count\": \"0\",
        \"travel_posts_count\": \"0\",
        \"travel_replys_count\": \"0\",
        \"foot_print_count\": \"0\",
        \"trip_route_count\": \"0\",
        \"be_recommended_count\": \"0\",
        \"favorite_count\": \"17\",
        \"pic_travel_count\": 10,
        \"is_admin\": 1,
        \"is_owner\": 0,
        \"is_daren\": 0,
        \"is_famous\": 0,
        \"is_reply_trust\": 0,
        \"has_login_record\": 1,
        \"app_has_login_record\": 1,
        \"reply_day_count\": \"2\",
        \"is_activated\": 1,
        \"has_uname\": 1,
        \"is_bindemail\": 1,
        \"usersource\": 0,
        \"is_bundle\": 0,
        \"login_src\": 0,
        \"bdstoken\": \"5b3fe6b69cd92433375feabffd5ca49b\",
        \"is_login\": 1
    },
    \"remark_list\": [
        {
            \"remark_id\": \"123\",
            \"type\": \"1\",
            \"sname\": \"北京\",
            \"words\": \"帝都天气真不好>_<\",
            \"create_time\": \"1375799800\",
            \"audit_time\": \"1376899999\",
            \"uid\": \"bbfd6d1df0dedf1e815e75b2\",
            \"uip\": \"\",
            \"user_nickname\": \"\",
            \"audit_uid\": \"bbfd6l23jlh43ljf1e815e75b2\",
            \"audit_uname\": \"管理员1号\",
            \"pic_count\": 10,
            \"pic_list\": [
                {
                    \"remark_pic_id\": \"sldfos86969sdf9sdfsdfs\",
                    \"pic_url\": \"b3fb43166d224f4aec312ae208f790529922d193\"
                },
                {
                    \"remark_pic_id\": \"sldfos86969sdf9sdfsdfs\",
                    \"pic_url\": \"7a899e510fb30f243832b5f2c995d143ac4b0392\"
                }
            ]
        }
    ],
    \"total\": \"902626\",
    \"pagelist\": []
}','method'=>'GET'),
    array('aid'=>64,'url'=>'/mis/remark/operator','module_name'=>'mis','description'=>'对点评图片内容进行操作','params'=>'{
    \"remark_pass_ids[]\": \"通过点评的列表\",
    \"remark_del_ids[]\": \"删除点评的列表\",
    \"remarkpic_pass_ids[]\": \"通过点评的图片列表\",
    \"remarkpic_del_ids[]\": \"删除点评的图片列表\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\":{
    }

}','method'=>'POST'),
    array('aid'=>65,'url'=>'mis/remark/sensitive','module_name'=>'mis','description'=>'点评后台-政治敏感审核列表','params'=>'{
    \"pn\": 10,
    \"rn\": 10,
    \"sname\": \"查找的地点\"
}','response'=>'{
    \"user\": {
        \"username\": \"lv00_1\",
        \"uname\": \"lv00_1\",
        \"uid\": \"6272b2069fd831c240a00f5e\",
        \"nickname\": \"lv00_1\",
        \"avatar_source\": \"1\",
        \"avatar_large\": \"90816c7630305f31ec0b\",
        \"avatar_middle\": \"90816c7630305f31ec0b\",
        \"avatar_small\": \"90816c7630305f31ec0b\",
        \"self_introduction\": \"\",
        \"location_sid\": \"0\",
        \"location\": \"\",
        \"preferences\": [],
        \"is_blocked\": 0,
        \"user_level\": \"0\",
        \"owner_level\": \"0\",
        \"admin_level\": \"2\",
        \"is_audited\": 1,
        \"trust_level\": \"0\",
        \"score\": \"1503\",
        \"wealth\": \"505\",
        \"praise_count\": \"6\",
        \"notes_count\": \"1\",
        \"notes_count_total\": \"2\",
        \"recommend_count\": \"89\",
        \"common_posts_count\": \"2\",
        \"going_count\": \"2\",
        \"gone_count\": \"0\",
        \"version_count\": \"0\",
        \"create_time\": \"1346896225\",
        \"update_time\": \"1375063449\",
        \"last_login_time\": \"1374665432\",
        \"recommend_notes_count\": \"0\",
        \"travel_count\": \"0\",
        \"travel_posts_count\": \"0\",
        \"travel_replys_count\": \"0\",
        \"foot_print_count\": \"0\",
        \"trip_route_count\": \"0\",
        \"be_recommended_count\": \"0\",
        \"favorite_count\": \"17\",
        \"pic_travel_count\": 10,
        \"is_admin\": 1,
        \"is_owner\": 0,
        \"is_daren\": 0,
        \"is_famous\": 0,
        \"is_reply_trust\": 0,
        \"has_login_record\": 1,
        \"app_has_login_record\": 1,
        \"reply_day_count\": \"2\",
        \"is_activated\": 1,
        \"has_uname\": 1,
        \"is_bindemail\": 1,
        \"usersource\": 0,
        \"is_bundle\": 0,
        \"login_src\": 0,
        \"bdstoken\": \"5b3fe6b69cd92433375feabffd5ca49b\",
        \"is_login\": 1
    },
    \"remark_list\": [
        {
            \"remark_id\": \"bbdlkfjiu07v9sd6f89\",
            \"type\": \"1\",
            \"sname\": \"北京\",
            \"words\": \"帝都天气真不好>_<\",
            \"create_time\": \"1375799800\",
            \"uid\": \"bbfd6d1df0dedf1e815e75b2\",
            \"user_nickname\": \"lvyou01\",
            \"uip\": \"987sf9s698f7s97f9s7f\",
            \"sensitive_flag\": \"1\",
            \"sensitive_words\":\"习近平\",
            \"advertising_flag\":\"1\",
            \"advertising_words\":\"qq,\",
            \"ftextract_words\":\"97160\",
            \"terms\":[\"习近平\"],
            \"hilight_word\":\"习近平\"
        }
    ],
    \"total\": \"902626\",
    \"pagelist\": []
}','method'=>'GET'),
    array('aid'=>66,'url'=>'mis/remark/advertising','module_name'=>'mis','description'=>'点评后台-广告审核','params'=>'{
    \"pn\": 10,
    \"rn\": 10,
    \"sname\": \"查找的地点\"
}','response'=>'{
    \"user\": {
        \"username\": \"lv00_1\",
        \"uname\": \"lv00_1\",
        \"uid\": \"6272b2069fd831c240a00f5e\",
        \"nickname\": \"lv00_1\",
        \"avatar_source\": \"1\",
        \"avatar_large\": \"90816c7630305f31ec0b\",
        \"avatar_middle\": \"90816c7630305f31ec0b\",
        \"avatar_small\": \"90816c7630305f31ec0b\",
        \"self_introduction\": \"\",
        \"location_sid\": \"0\",
        \"location\": \"\",
        \"preferences\": [],
        \"is_blocked\": 0,
        \"user_level\": \"0\",
        \"owner_level\": \"0\",
        \"admin_level\": \"2\",
        \"is_audited\": 1,
        \"trust_level\": \"0\",
        \"score\": \"1503\",
        \"wealth\": \"505\",
        \"praise_count\": \"6\",
        \"notes_count\": \"1\",
        \"notes_count_total\": \"2\",
        \"recommend_count\": \"89\",
        \"common_posts_count\": \"2\",
        \"going_count\": \"2\",
        \"gone_count\": \"0\",
        \"version_count\": \"0\",
        \"create_time\": \"1346896225\",
        \"update_time\": \"1375063449\",
        \"last_login_time\": \"1374665432\",
        \"recommend_notes_count\": \"0\",
        \"travel_count\": \"0\",
        \"travel_posts_count\": \"0\",
        \"travel_replys_count\": \"0\",
        \"foot_print_count\": \"0\",
        \"trip_route_count\": \"0\",
        \"be_recommended_count\": \"0\",
        \"favorite_count\": \"17\",
        \"pic_travel_count\": 10,
        \"is_admin\": 1,
        \"is_owner\": 0,
        \"is_daren\": 0,
        \"is_famous\": 0,
        \"is_reply_trust\": 0,
        \"has_login_record\": 1,
        \"app_has_login_record\": 1,
        \"reply_day_count\": \"2\",
        \"is_activated\": 1,
        \"has_uname\": 1,
        \"is_bindemail\": 1,
        \"usersource\": 0,
        \"is_bundle\": 0,
        \"login_src\": 0,
        \"bdstoken\": \"5b3fe6b69cd92433375feabffd5ca49b\",
        \"is_login\": 1
    },
    \"remark_list\": [
        {
            \"remark_id\": \"bbdlkfjiu07v9sd6f89\",
            \"type\": \"1\",
            \"sname\": \"北京\",
            \"words\": \"帝都天气真不好>_<\",
            \"create_time\": \"1375799800\",
            \"uid\": \"bbfd6d1df0dedf1e815e75b2\",
            \"user_nickname\": \"lvyou01\",
            \"uip\": \"987sf9s698f7s97f9s7f\",
            \"sensitive_flag\": \"1\",
            \"sensitive_words\": \"习近平\",
            \"advertising_flag\": \"1\",
            \"advertising_words\": \"qq,\",
            \"terms\": [\"习近平\"],
            \"hilight_word\": \"习近平\"
        }
    ],
    \"total\": \"902626\",
    \"pagelist\": []
}','method'=>'GET'),
    array('aid'=>67,'url'=>'/mis/remark/verify','module_name'=>'mis','description'=>'对点评内容的审核操作','params'=>'{
    \"remark_del_ids[]\":\"要删除的点评id\",
    \"remark_pass_ids[]\": \"要通过的点评id\",
    \"type\": \"sensitive\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {}
}','method'=>'POST'),
    array('aid'=>68,'url'=>'/scene/ajax/getsubtickets','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>69,'url'=>'/scene/ajax/poi/dining','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>70,'url'=>'/scene/ajax/downbook','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>71,'url'=>'/scene/ajax/books','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>72,'url'=>'/scene/ajax/guidefeed','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>73,'url'=>'/scene/ajax/Getscenecontent','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>74,'url'=>'/scene/ajax/Getscenepoint','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>75,'url'=>'/scene/sub/{%$sid%}','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>76,'url'=>'/scene/ajax/gettickets','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>77,'url'=>'/scene/ajax/getscenebyids','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>78,'url'=>'/scene/ajax/getsmallscenes','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>79,'url'=>'/scene/ajax/getguidebygids','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>81,'url'=>'/scene/ajax/photo/save','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>82,'url'=>'/scene/ajax/photo/delete','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>83,'url'=>'/scene/ajax/album/cover','module_name'=>'scene','description'=>'内无','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>84,'url'=>'/destination/ajax/photo/synupload','module_name'=>'destination','description'=>'【异步】图片上传','params'=>'{
    \"sid\": \"\",
    \"sub_type\": \"相册类型\",
    \"water_mark\": \"是否加水印\",
    \"upload_file\": \"上传的图片\"
}','response'=>'{}','method'=>'POST'),
    array('aid'=>85,'url'=>'/destination/ajax/poi/delete','module_name'=>'destination','description'=>'【异步】poi点删除','params'=>'{
    \"sid\":\"795ac511463263cf7ae3def3\",
\"scid\":\"14155f19f38be71f7f913c39\",
\"module\":\"hotel\",
\"sub_module\":\"hotel\"
    }','response'=>'{}','method'=>'POST'),
    array('aid'=>86,'url'=>'/destination/ajax/poi/save','module_name'=>'destination','description'=>'【异步】poi点保存','params'=>'{
    \"sid\":\"795ac511463263cf7ae3def3\",
\"type\":3,
\"content_array\":[{\"name\":\"gggggggg\",\"poid\":\"863587cf7e1a90377d473939\",\"qunar_id\":\"\",\"place_uid\":\"gggggggg\",\"address\":\"\",\"map_info\":\"0,0\",\"phone\":\"\",\"area\":\"\",\"price\":\"0.00\",\"over_rating\":\"0.0\",\"type_tag\":\"21\",\"rec_tag\":\"\",\"rec_reason\":\"\",\"traffic\":\"\",\"pic_url\":\"\",\"pic_id\":\"\",\"ext\":\"\",\"pic_type\":\"0\",\"scid\":\"863587cf7e1a90377d473939\"}]
    }','response'=>'{}','method'=>'POST'),
    array('aid'=>87,'url'=>'/destination/poi/photo/upload','module_name'=>'destination','description'=>'【异步】poi图片上传','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>88,'url'=>'/destination/create','module_name'=>'destination','description'=>'创建景点页面','params'=>'{}','response'=>'{
    \"msg\": \"\",
    \"errno\": 0,
    \"user\": {
        \"username\": \"lv00_1\",
        \"uname\": \"lv00_1\",
        \"uid\": \"6272b2069fd831c240a00f5e\",
        \"nickname\": \"lv00_1\",
        \"avatar_source\": \"1\",
        \"avatar_large\": \"90816c7630305f31ec0b\",
        \"avatar_middle\": \"90816c7630305f31ec0b\",
        \"avatar_small\": \"90816c7630305f31ec0b\",
        \"self_introduction\": \"我为自己带盐\",
        \"location_sid\": \"795ac511463263cf7ae3def3\",
        \"location\": \"北京\",
        \"preferences\": [\"自驾\", \"自然风光\"],
        \"is_blocked\": 0,
        \"user_level\": \"0\",
        \"owner_level\": \"0\",
        \"admin_level\": \"2\",
        \"is_audited\": 1,
        \"trust_level\": \"0\",
        \"score\": \"1251\",
        \"wealth\": \"250\",
        \"praise_count\": \"0\",
        \"notes_count\": \"0\",
        \"notes_count_total\": \"0\",
        \"recommend_count\": \"0\",
        \"common_posts_count\": \"0\",
        \"going_count\": \"0\",
        \"gone_count\": \"0\",
        \"version_count\": \"0\",
        \"create_time\": \"1346896225\",
        \"update_time\": \"1374634786\",
        \"last_login_time\": \"1374633781\",
        \"recommend_notes_count\": \"0\",
        \"travel_count\": \"0\",
        \"travel_posts_count\": \"0\",
        \"travel_replys_count\": \"0\",
        \"foot_print_count\": \"0\",
        \"trip_route_count\": \"0\",
        \"be_recommended_count\": \"0\",
        \"favorite_count\": \"0\",
        \"pic_travel_count\": 0,
        \"is_admin\": 1,
        \"is_owner\": 0,
        \"is_daren\": 0,
        \"is_famous\": 0,
        \"is_reply_trust\": 0,
        \"has_login_record\": 1,
        \"app_has_login_record\": 0,
        \"reply_day_count\": \"0\",
        \"is_activated\": 1,
        \"has_uname\": 1,
        \"is_bindemail\": 1,
        \"usersource\": 0,
        \"is_bundle\": 0,
        \"login_src\": 0,
        \"bdstoken\": \"1adbdf31e79321498d0a5a512a61955b\",
        \"is_login\": 1
    },
    \"guide_scene_path\": {
        \"1\": {
            \"sid\": \"c921e59aba1c706693d2d7f3\",
            \"surl\": \"yazhou\",
            \"sname\": \"亚洲\",
            \"parent_sid\": \"0\",
            \"uid\": \"1bac7536b8e8ed52f2cad25c\",
            \"view_count\": \"63679\",
            \"cid\": \"27\",
            \"star\": \"5\",
            \"scene_layer\": \"1\",
            \"is_china\": \"0\",
            \"vid\": \"264755\",
            \"ext\": {
                \"sid\": \"c921e59aba1c706693d2d7f3\",
                \"scene_layer\": \"1\",
                \"fmap_x\": \"0\",
                \"fmap_y\": \"0\",
                \"visit_count\": \"201\",
                \"map_x\": \"10153288.056243\",
                \"map_y\": \"4319390.7948819\",
                \"map_info\": \"91.201168,36.315125\",
                \"going_count\": \"146\",
                \"gone_count\": \"71\",
                \"md5\": \"\",
                \"ipad_package_md5\": \"\",
                \"poid\": \"0\",
                \"tpl_id\": \"1\",
                \"version_id\": \"1\",
                \"alias\": \"\",
                \"en_sname\": \"Asia\",
                \"address\": \" \",
                \"phone\": \"\",
                \"level\": \"\",
                \"website\": \"\",
                \"visa_level\": \"0\",
                \"abs_desc\": \"带上一颗旅游的心，踏上“东方日出之地”。\",
                \"sketch_desc\": \"\",
                \"more_desc\": \"\"
            }
        },
        \"2173\": {
            \"sid\": \"634819c66b17a516f1f4abfb\",
            \"surl\": \"beimeizhou\",
            \"sname\": \"北美洲\",
            \"parent_sid\": \"0\",
            \"uid\": \"408a5cb136de73f660ea480f\",
            \"view_count\": \"12675\",
            \"cid\": \"1\",
            \"star\": \"5\",
            \"scene_layer\": \"1\",
            \"is_china\": \"0\",
            \"vid\": \"147663\",
            \"ext\": {
                \"sid\": \"634819c66b17a516f1f4abfb\",
                \"scene_layer\": \"1\",
                \"fmap_x\": \"0\",
                \"fmap_y\": \"0\",
                \"visit_count\": \"91\",
                \"map_x\": \"0\",
                \"map_y\": \"0\",
                \"map_info\": \"\",
                \"going_count\": \"74\",
                \"gone_count\": \"16\",
                \"md5\": \"\",
                \"ipad_package_md5\": \"\",
                \"poid\": \"0\",
                \"tpl_id\": \"1\",
                \"version_id\": \"1\",
                \"alias\": \"北亚美利加洲\",
                \"en_sname\": \"North America\",
                \"address\": \" \",
                \"phone\": \"\",
                \"level\": \"\",
                \"website\": \"\",
                \"visa_level\": \"0\",
                \"abs_desc\": \"一部北美洲的历史，就是一部宏大的移民史，从民族的融合，到文化、音乐等熔炉的诞生，各有风格却相处愉快，融合的吸引力，没有偏见，包容大度。\",
                \"sketch_desc\": \"\",
                \"more_desc\": \"\"
            }
        },
        \"50571\": {
            \"sid\": \"9c30f47a261257ae7e7e5d36\",
            \"surl\": \"nanjizhou\",
            \"sname\": \"南极洲\",
            \"parent_sid\": \"0\",
            \"uid\": \"a4511c0fb52adbdc5aef9512\",
            \"view_count\": \"924\",
            \"cid\": \"27\",
            \"star\": \"5\",
            \"scene_layer\": \"1\",
            \"is_china\": \"0\",
            \"vid\": \"190642\",
            \"ext\": {
                \"sid\": \"9c30f47a261257ae7e7e5d36\",
                \"scene_layer\": \"1\",
                \"fmap_x\": \"0\",
                \"fmap_y\": \"0\",
                \"visit_count\": \"20\",
                \"map_x\": \"10459940.554865\",
                \"map_y\": \"-10214797.181294\",
                \"map_info\": \"93.955542,-67.349731\",
                \"going_count\": \"18\",
                \"gone_count\": \"2\",
                \"md5\": \"\",
                \"ipad_package_md5\": \"\",
                \"poid\": \"0\",
                \"tpl_id\": \"1\",
                \"version_id\": \"1\",
                \"alias\": \"\",
                \"en_sname\": \"Antarctica\",
                \"address\": \" \",
                \"phone\": \"\",
                \"level\": \"\",
                \"website\": \"\",
                \"visa_level\": \"0\",
                \"abs_desc\": \"有人说这里是人类文明的尽头，也有人说这里是一个崭新的世界。\",
                \"sketch_desc\": \"\",
                \"more_desc\": \"\"
            }
        },
        \"2175\": {
            \"sid\": \"141fa516f1f4f23cac1da9fb\",
            \"surl\": \"nanmeizhou\",
            \"sname\": \"南美洲\",
            \"parent_sid\": \"0\",
            \"uid\": \"408a5cb136de73f660ea480f\",
            \"view_count\": \"11737\",
            \"cid\": \"27\",
            \"star\": \"5\",
            \"scene_layer\": \"1\",
            \"is_china\": \"0\",
            \"vid\": \"145697\",
            \"ext\": {
                \"sid\": \"141fa516f1f4f23cac1da9fb\",
                \"scene_layer\": \"1\",
                \"fmap_x\": \"0\",
                \"fmap_y\": \"0\",
                \"visit_count\": \"46\",
                \"map_x\": \"0\",
                \"map_y\": \"0\",
                \"map_info\": \"\",
                \"going_count\": \"44\",
                \"gone_count\": \"3\",
                \"md5\": \"\",
                \"ipad_package_md5\": \"\",
                \"poid\": \"0\",
                \"tpl_id\": \"1\",
                \"version_id\": \"1\",
                \"alias\": \"\",
                \"en_sname\": \"South America\",
                \"address\": \" \",
                \"phone\": \"\",
                \"level\": \"\",
                \"website\": \"\",
                \"visa_level\": \"0\",
                \"abs_desc\": \"激情与狂野，热情与奔放，一切尽在这里。\",
                \"sketch_desc\": \"\",
                \"more_desc\": \"\"
            }
        },
        \"5\": {
            \"sid\": \"96d2d06f5707715ac511d3f3\",
            \"surl\": \"dayangzhou\",
            \"sname\": \"大洋洲\",
            \"parent_sid\": \"0\",
            \"uid\": \"d17070f4adc84c057724afc7\",
            \"view_count\": \"9907\",
            \"cid\": \"0\",
            \"star\": \"5\",
            \"scene_layer\": \"1\",
            \"is_china\": \"0\",
            \"vid\": \"280123\",
            \"ext\": {
                \"sid\": \"96d2d06f5707715ac511d3f3\",
                \"scene_layer\": \"1\",
                \"fmap_x\": \"0\",
                \"fmap_y\": \"0\",
                \"visit_count\": \"52\",
                \"map_x\": \"0\",
                \"map_y\": \"0\",
                \"map_info\": \"\",
                \"going_count\": \"40\",
                \"gone_count\": \"14\",
                \"md5\": \"\",
                \"ipad_package_md5\": \"\",
                \"poid\": \"0\",
                \"tpl_id\": \"0\",
                \"version_id\": \"1\",
                \"alias\": \"\",
                \"en_sname\": \"\",
                \"address\": \" \",
                \"phone\": \"\",
                \"level\": \"\",
                \"website\": \"\",
                \"visa_level\": \"0\",
                \"abs_desc\": \"\",
                \"sketch_desc\": \"\",
                \"more_desc\": \"\"
            }
        },
        \"58438\": {
            \"sid\": \"88eee6bc81baae5f1d3a9017\",
            \"surl\": \"天山天池\",
            \"sname\": \"天池\",
            \"parent_sid\": \"0\",
            \"uid\": \"828cfad760eaf7e321c54ea7\",
            \"view_count\": \"0\",
            \"cid\": \"0\",
            \"star\": \"0\",
            \"scene_layer\": \"0\",
            \"is_china\": \"1\",
            \"vid\": \"0\",
            \"ext\": {
                \"sid\": \"88eee6bc81baae5f1d3a9017\",
                \"scene_layer\": \"6\",
                \"fmap_x\": \"0\",
                \"fmap_y\": \"0\",
                \"visit_count\": \"0\",
                \"map_x\": \"0\",
                \"map_y\": \"0\",
                \"map_info\": \"\",
                \"going_count\": \"0\",
                \"gone_count\": \"0\",
                \"md5\": \"\",
                \"ipad_package_md5\": \"\",
                \"poid\": \"0\",
                \"tpl_id\": \"0\",
                \"version_id\": \"0\",
                \"alias\": \"\",
                \"en_sname\": \"\",
                \"address\": \"\",
                \"phone\": \"\",
                \"level\": \"\",
                \"website\": \"\",
                \"visa_level\": \"0\",
                \"abs_desc\": \"\",
                \"sketch_desc\": \"\",
                \"more_desc\": null
            }
        },
        \"2\": {
            \"sid\": \"e79aba1c706693d2d06fd4f3\",
            \"surl\": \"ouzhou\",
            \"sname\": \"欧洲\",
            \"parent_sid\": \"0\",
            \"uid\": \"d17070f4adc84c057724afc7\",
            \"view_count\": \"250574\",
            \"cid\": \"27\",
            \"star\": \"5\",
            \"scene_layer\": \"1\",
            \"is_china\": \"0\",
            \"vid\": \"246471\",
            \"ext\": {
                \"sid\": \"e79aba1c706693d2d06fd4f3\",
                \"scene_layer\": \"1\",
                \"fmap_x\": \"0\",
                \"fmap_y\": \"0\",
                \"visit_count\": \"725\",
                \"map_x\": \"1465081.2846981\",
                \"map_y\": \"6737641.0504638\",
                \"map_info\": \"13.154293,51.835778\",
                \"going_count\": \"605\",
                \"gone_count\": \"121\",
                \"md5\": \"\",
                \"ipad_package_md5\": \"\",
                \"poid\": \"0\",
                \"tpl_id\": \"1\",
                \"version_id\": \"1\",
                \"alias\": \"欧罗巴\",
                \"en_sname\": \"Europe\",
                \"address\": \" \",
                \"phone\": \"\",
                \"level\": \"--\",
                \"website\": \"\",
                \"visa_level\": \"0\",
                \"abs_desc\": \"大西洋的和风缓缓吹拂，文艺复兴的光辉闪耀世界；优美的海滩，蜿蜒的河流，高耸的雪山。自然之美与人文之美汇集在这个“西方日落的地方”。\",
                \"sketch_desc\": \"\",
                \"more_desc\": \"ŷ\"
            }
        },
        \"4\": {
            \"sid\": \"746693d2d06f5707715ad2f3\",
            \"surl\": \"feizhou\",
            \"sname\": \"非洲\",
            \"parent_sid\": \"0\",
            \"uid\": \"1bac7536b8e8ed52f2cad25c\",
            \"view_count\": \"31369\",
            \"cid\": \"27\",
            \"star\": \"5\",
            \"scene_layer\": \"1\",
            \"is_china\": \"0\",
            \"vid\": \"269358\",
            \"ext\": {
                \"sid\": \"746693d2d06f5707715ad2f3\",
                \"scene_layer\": \"1\",
                \"fmap_x\": \"0\",
                \"fmap_y\": \"0\",
                \"visit_count\": \"111\",
                \"map_x\": \"2521745.5784075\",
                \"map_y\": \"544871.44918535\",
                \"map_info\": \"22.646481,4.915833\",
                \"going_count\": \"99\",
                \"gone_count\": \"17\",
                \"md5\": \"\",
                \"ipad_package_md5\": \"\",
                \"poid\": \"0\",
                \"tpl_id\": \"1\",
                \"version_id\": \"1\",
                \"alias\": \"\",
                \"en_sname\": \"Africa\",
                \"address\": \" \",
                \"phone\": \"\",
                \"level\": \"\",
                \"website\": \"\",
                \"visa_level\": \"0\",
                \"abs_desc\": \"神秘雄壮的金字塔、蜿蜒流淌的尼罗河，原始的野生动物保护区、关于土著的流言和传说……野性和温柔在这里交织，古老和现代在某一刻碰撞，非洲，是天堂也是地狱。\",
                \"sketch_desc\": \"\",
                \"more_desc\": \"\"
            }
        }
    },
    \"wise_model\": \"pc\",
    \"curr_idc\": \"t\"
}','method'=>'GET'),
    array('aid'=>89,'url'=>'destination/ajax/sub/c921e59aba1c706693d2d7f3','module_name'=>'destination','description'=>'【异步】获取下级目的地列表','params'=>'{}','response'=>'{ \"errno\": 0, \"msg\": \"\", \"data\": {\"sid\":\"c921e59aba1c706693d2d7f3\",\"vid\":\"4adfc1b7191238bd1a1a0c05\",\"surl\":\"yazhou\",\"sname\":\"\\u4e9a\\u6d32\",\"star\":\"5\",\"cid\":\"27\",\"ext\":null,\"sub_scene_list\":[{\"sid\":\"28972b074d001b3184b27efd\",\"surl\":\"budan\",\"sname\":\"\\u4e0d\\u4e39\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"79672\",\"cid\":\"0\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"5e40f6db8940ba3128056241\"},{\"sid\":\"c990ae5f1d3a784045d69ed9\",\"surl\":\"dongdiwen\",\"sname\":\"\\u4e1c\\u5e1d\\u6c76\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"6e057d6bd70b05e874346bed\",\"view_count\":\"4604\",\"cid\":\"0\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"9aac070f29d94a044019bd08\"},{\"sid\":\"5007715ac511463263cfd1f3\",\"surl\":\"zhongguo\",\"sname\":\"\\u4e2d\\u56fd\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"1bac7536b8e8ed52f2cad25c\",\"view_count\":\"72931\",\"cid\":\"27\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"1\",\"vid\":\"15a9f4262a8d0b0ef2db6d3f\"},{\"sid\":\"41f21e4019c66b17a516aafe\",\"surl\":\"wuzibiekesitan\",\"sname\":\"\\u4e4c\\u5179\\u522b\\u514b\\u65af\\u5766\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"14929\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"55b19417cdb3d7c8b66d533a\"},{\"sid\":\"10d7222e5d285f52dec9f0fd\",\"surl\":\"yemen\",\"sname\":\"\\u4e5f\\u95e8\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"2077\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"f291192edd760f38e9fbb541\"},{\"sid\":\"251bf1f4f23cac1d394c56fe\",\"surl\":\"yameiniya\",\"sname\":\"\\u4e9a\\u7f8e\\u5c3c\\u4e9a\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"2320\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"24c42e4a9d669b3962155540\"},{\"sid\":\"11de1a1d89d2a0f44f4743fd\",\"surl\":\"yiselie\",\"sname\":\"\\u4ee5\\u8272\\u5217\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"62144\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"7d6f6b0084fe2e2ad3ea5a41\"},{\"sid\":\"38fa4f47a4211acb2b024efd\",\"surl\":\"yilake\",\"sname\":\"\\u4f0a\\u62c9\\u514b\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"4586\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"9adb480190080a2b60f8e40a\"},{\"sid\":\"8c1389d2a0f44f47a42140fd\",\"surl\":\"yilang\",\"sname\":\"\\u4f0a\\u6717\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"37037\",\"cid\":\"1\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"3abb93215a0e0f8835201636\"},{\"sid\":\"795ac511463263cf7ae3def3\",\"surl\":\"beijing\",\"sname\":\"\\u5317\\u4eac\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"6272b2069fd831c240a00f5e\",\"view_count\":\"4024276\",\"cid\":\"1\",\"star\":\"5\",\"scene_layer\":\"4\",\"is_china\":\"0\",\"vid\":\"873dce11fb083b1951954d6d\"},{\"sid\":\"a9706b2265c83e2b6ddee4fd\",\"surl\":\"kataer\",\"sname\":\"\\u5361\\u5854\\u5c14\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"4488\",\"cid\":\"1\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"b9337bdf1d2edd760f38b6f2\"},{\"sid\":\"3a86363b4ffbffdcdfcc98fb\",\"surl\":\"yindu\",\"sname\":\"\\u5370\\u5ea6\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"163246\",\"cid\":\"1\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"8c891202ed93007830da2d41\"},{\"sid\":\"1884bb0e13551b123dffaefb\",\"surl\":\"yindunixiya\",\"sname\":\"\\u5370\\u5ea6\\u5c3c\\u897f\\u4e9a\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"85716\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"8f1d3f19519582091171431a\"},{\"sid\":\"d649a4211acb2b02abe64ffd\",\"surl\":\"xuliya\",\"sname\":\"\\u53d9\\u5229\\u4e9a\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"4567\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"e2c3cce53e093f57a802c237\"},{\"sid\":\"71f7c05f301a4dadc1b4cbfd\",\"surl\":\"jierjisisitan\",\"sname\":\"\\u5409\\u5c14\\u5409\\u65af\\u65af\\u5766\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"8864\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"9470f31e010cdb36b900ff41\"},{\"sid\":\"36e866d6c4365b0af2c94bfd\",\"surl\":\"hasakesitan\",\"sname\":\"\\u54c8\\u8428\\u514b\\u65af\\u5766\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"25215\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"7d4e4f2861909222ddfdf341\"},{\"sid\":\"5e5fe5187498603a75a3c4fd\",\"surl\":\"tukumansitan\",\"sname\":\"\\u571f\\u5e93\\u66fc\\u65af\\u5766\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"7116\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"86d2fc35261653a53bc09af2\"},{\"sid\":\"1ff3ffdcdfcc000b297586fb\",\"surl\":\"tuerqi\",\"sname\":\"\\u571f\\u8033\\u5176\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"181511\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"4e705595820911710fec4266\"},{\"sid\":\"753475a3a4c71261cb1fc3fd\",\"surl\":\"tajikesitan\",\"sname\":\"\\u5854\\u5409\\u514b\\u65af\\u5766\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"8540\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"5f50f4680a2bb156bc199241\"},{\"sid\":\"79ed4ffbffdcdfcc000b9925\",\"surl\":\"aolisa\",\"sname\":\"\\u5965\\u91cc\\u8428\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"2759ae573a627f249452d569\",\"view_count\":\"0\",\"cid\":\"0\",\"star\":\"0\",\"scene_layer\":\"3\",\"is_china\":\"0\",\"vid\":\"15517519fa33a7a623d89647\"},{\"sid\":\"cafc56c0a53ec6adcd2f8dfd\",\"surl\":\"mengjialaguo\",\"sname\":\"\\u5b5f\\u52a0\\u62c9\\u56fd\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"31430\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"3a6bcf5935bf19ab040fb841\"},{\"sid\":\"dbf91bc6adc41efa15d8b7fb\",\"surl\":\"niboer\",\"sname\":\"\\u5c3c\\u6cca\\u5c14\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"346409\",\"cid\":\"1\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"f9f7047830da8e000c9b236b\"},{\"sid\":\"c0394db66f54bc917500effd\",\"surl\":\"balesitan\",\"sname\":\"\\u5df4\\u52d2\\u65af\\u5766\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"1838\",\"cid\":\"1\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"4e035595820911710fec4215\"},{\"sid\":\"82094d001b3184b2b2b67ffd\",\"surl\":\"bajisitan\",\"sname\":\"\\u5df4\\u57fa\\u65af\\u5766\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"48132\",\"cid\":\"1\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"464c9e669b396215de375409\"},{\"sid\":\"e4cb7454b0656bc57594befd\",\"surl\":\"balin\",\"sname\":\"\\u5df4\\u6797\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"2836\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"547e70e330849717cdb35d40\"},{\"sid\":\"987bcd2feedcbaf11bc68825\",\"surl\":\"guangnansheng\",\"sname\":\"\\u5e7f\\u5357\\u7701\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"2759ae573a627f249452d569\",\"view_count\":\"0\",\"cid\":\"0\",\"star\":\"0\",\"scene_layer\":\"3\",\"is_china\":\"0\",\"vid\":\"98e04bd271aa85db0163e166\"},{\"sid\":\"b775ab240abb6cf9c05fcc2a\",\"surl\":\"lafashanguojiasenlingongyuan\",\"sname\":\"\\u62c9\\u6cd5\\u5c71\\u56fd\\u5bb6\\u68ee\\u6797\\u516c\\u56ed\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"3c056726cd31f9020cbbcdbe\",\"view_count\":\"0\",\"cid\":\"0\",\"star\":\"0\",\"scene_layer\":\"0\",\"is_china\":\"1\",\"vid\":\"0\"},{\"sid\":\"db2d1bc6adc41efa15d8b72f\",\"surl\":\"ladake\",\"sname\":\"\\u62c9\\u8fbe\\u514b\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"cd06ba30723146b60d1dc6e8\",\"view_count\":\"0\",\"cid\":\"27\",\"star\":\"0\",\"scene_layer\":\"4\",\"is_china\":\"0\",\"vid\":\"4f4b4ff9f839257f6c107459\"},{\"sid\":\"295891f256c0a53ec6ad8cfd\",\"surl\":\"wenlai\",\"sname\":\"\\u6587\\u83b1\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"73643\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"7f497b923934fd0169e4c850\"},{\"sid\":\"295e91f256c0a53ec6ad8cfb\",\"surl\":\"sililanka\",\"sname\":\"\\u65af\\u91cc\\u5170\\u5361\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"179261\",\"cid\":\"1\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"6c57fa0cc76a3b16421c7d41\"},{\"sid\":\"b15d7068c2f160adbc2c83fb\",\"surl\":\"xinjiapo\",\"sname\":\"\\u65b0\\u52a0\\u5761\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"870509\",\"cid\":\"27\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"ad4346266af590167f92cb66\"},{\"sid\":\"f836c6adcd2feedcbaf18bfb\",\"surl\":\"riben\",\"sname\":\"\\u65e5\\u672c\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"484735\",\"cid\":\"0\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"f2717532631a2e19fe0c7858\"},{\"sid\":\"5c8fbdddd1b88617eee50025\",\"surl\":\"punaka\",\"sname\":\"\\u666e\\u90a3\\u5361\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"2759ae573a627f249452d569\",\"view_count\":\"0\",\"cid\":\"0\",\"star\":\"0\",\"scene_layer\":\"4\",\"is_china\":\"0\",\"vid\":\"f6b395e161255671106dd366\"},{\"sid\":\"24e6eb69e222608cbb0ea3fb\",\"surl\":\"chaoxian\",\"sname\":\"\\u671d\\u9c9c\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"157388\",\"cid\":\"1\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"abfdd3c8b66dad344e8b5141\"},{\"sid\":\"00cd7594baeb76b3690fbdfb\",\"surl\":\"jianpuzhai\",\"sname\":\"\\u67ec\\u57d4\\u5be8\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"356252\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"f2427532631a2e19fe0c786b\"},{\"sid\":\"70f9f23cac1d394cbc1a57fe\",\"surl\":\"gelujiya\",\"sname\":\"\\u683c\\u9c81\\u5409\\u4e9a\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"3854\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"8e6665909222ddfd15d2f241\"},{\"sid\":\"eb6097289b7e6b2265c8e6fd\",\"surl\":\"shatealabo\",\"sname\":\"\\u6c99\\u7279\\u963f\\u62c9\\u4f2f\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"17851\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"023bee93007830da8e002c36\"},{\"sid\":\"953260adbc2c735691f28130\",\"surl\":\"bolinixiya\",\"sname\":\"\\u6ce2\\u5229\\u5c3c\\u897f\\u4e9a\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"e44775b73f1795acd0255a65\",\"view_count\":\"533\",\"cid\":\"4\",\"star\":\"3\",\"scene_layer\":\"4\",\"is_china\":\"0\",\"vid\":\"8d5ed0642027956879d50862\"},{\"sid\":\"e524735691f256c0a53e8ffb\",\"surl\":\"taiguo\",\"sname\":\"\\u6cf0\\u56fd\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"1469907\",\"cid\":\"0\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"f64c20f24799f0262a8d6f59\"},{\"sid\":\"809f75003aad20f5663eeafd\",\"surl\":\"keweite\",\"sname\":\"\\u79d1\\u5a01\\u7279\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"2377\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"4e65d7ea363174e330845f40\"},{\"sid\":\"601c3dff1e4019c66b17adfd\",\"surl\":\"yuedan\",\"sname\":\"\\u7ea6\\u65e6\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"14772\",\"cid\":\"1\",\"star\":\"3\",\"scene_layer\":\"4\",\"is_china\":\"0\",\"vid\":\"b35c0fb687cddbac1fd0805f\"},{\"sid\":\"f800c4365b0af2c9c0054825\",\"surl\":\"naxiqiewan\",\"sname\":\"\\u7eb3\\u5e0c\\u5207\\u4e07\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"2759ae573a627f249452d569\",\"view_count\":\"0\",\"cid\":\"0\",\"star\":\"0\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"497dc5de091fdff84e89ed47\"},{\"sid\":\"3e2f1acb2b02abe666d64cfd\",\"surl\":\"miandian\",\"sname\":\"\\u7f05\\u7538\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"114718\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"46ca24216f0084fe2e2a5b0a\"},{\"sid\":\"b91c706693d2d06f5707d5f3\",\"surl\":\"laowo\",\"sname\":\"\\u8001\\u631d\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"09aeb9f65e0d9fd831c20879\",\"view_count\":\"103465\",\"cid\":\"0\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"07b7fc39257f6c10a61a6b41\"},{\"sid\":\"0bfc6dde39224b57f937e324\",\"surl\":\"suzhoubolanzhongxin\",\"sname\":\"\\u82cf\\u5dde\\u56fd\\u9645\\u535a\\u89c8\\u4e2d\\u5fc3\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"201f2e0cf42f9acb5e1e2e5e\",\"view_count\":\"0\",\"cid\":\"27\",\"star\":\"0\",\"scene_layer\":\"6\",\"is_china\":\"0\",\"vid\":\"d7f8b933d364202795680932\"},{\"sid\":\"060723d1dc24b39f0973b9fb\",\"surl\":\"feilvbin\",\"sname\":\"\\u83f2\\u5f8b\\u5bbe\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"173717\",\"cid\":\"0\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"1169916879d5c5b719120e41\"},{\"sid\":\"6f9afbe30b158915309e6825\",\"surl\":\"sabalajiamuwasheng\",\"sname\":\"\\u8428\\u5df4\\u62c9\\u52a0\\u7a46\\u74e6\\u7701\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"2759ae573a627f249452d569\",\"view_count\":\"0\",\"cid\":\"0\",\"star\":\"0\",\"scene_layer\":\"3\",\"is_china\":\"0\",\"vid\":\"fd31c2f012da91e16125dd66\"},{\"sid\":\"545abc9175003aad20f5edfd\",\"surl\":\"menggu\",\"sname\":\"\\u8499\\u53e4\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"45475\",\"cid\":\"27\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"383aeb9b108290215a0e1036\"},{\"sid\":\"334845d63412748e363b9dfb\",\"surl\":\"yuenan\",\"sname\":\"\\u8d8a\\u5357\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"504238\",\"cid\":\"27\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"08001403e89b108290211141\"},{\"sid\":\"141aa516f1f4f23cac1da9fe\",\"surl\":\"asaibaijiang\",\"sname\":\"\\u963f\\u585e\\u62dc\\u7586\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"2296\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"497bc5de091fdff84e89ed41\"},{\"sid\":\"24e0eb69e222608cbb0ea3fd\",\"surl\":\"afuhan\",\"sname\":\"\\u963f\\u5bcc\\u6c57\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"3157\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"60a91cd0aae17ee4e205850a\"},{\"sid\":\"b70cabe666d6c4365b0a4afd\",\"surl\":\"aman\",\"sname\":\"\\u963f\\u66fc\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"14e657b6636162a7890a52c8\",\"view_count\":\"8927\",\"cid\":\"1\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"60c8251653a53bc028ec99f2\"},{\"sid\":\"87ea7fe4381b2120f8cc1ee8\",\"surl\":\"alianqiu\",\"sname\":\"\\u963f\\u8054\\u914b\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"9be77020bf2cf6d51ace3a1c\",\"view_count\":\"24853\",\"cid\":\"1\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"27db860911710fec4bc54141\"},{\"sid\":\"d7e376b3690f23d1dc24bbfb\",\"surl\":\"hanguo\",\"sname\":\"\\u97e9\\u56fd\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"776761\",\"cid\":\"1\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"d45964f842d9792d1f58d97d\"},{\"sid\":\"1d5cb0656bc57594baebbffb\",\"surl\":\"maerdaifu\",\"sname\":\"\\u9a6c\\u5c14\\u4ee3\\u592b\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"892220\",\"cid\":\"1\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"ea9e0d80c17adf73df421941\"},{\"sid\":\"e4cd7454b0656bc57594befb\",\"surl\":\"malaixiya\",\"sname\":\"\\u9a6c\\u6765\\u897f\\u4e9a\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"610864\",\"cid\":\"0\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"20ade45fc111fb083b194e7e\"},{\"sid\":\"06d923d1dc24b39f0973b925\",\"surl\":\"huanghaibeidao\",\"sname\":\"\\u9ec4\\u6d77\\u5317\\u9053\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"2759ae573a627f249452d569\",\"view_count\":\"0\",\"cid\":\"0\",\"star\":\"0\",\"scene_layer\":\"4\",\"is_china\":\"0\",\"vid\":\"5cb2056346de4b019008e666\"},{\"sid\":\"81c52b02abe666d6c4364dfd\",\"surl\":\"libanen\",\"sname\":\"\\u9ece\\u5df4\\u5ae9\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"1625\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"14f816d273c57515658df70a\"}]}}','method'=>'GET'),
    array('aid'=>90,'url'=>'/destination/ajax/getallaroundscenes','module_name'=>'destination','description'=>'【异步】获取周边景点','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>91,'url'=>'/destination/ajax/getguidebysidandtype','module_name'=>'destination','description'=>'【异步】（周边游）获取路书','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>92,'url'=>'/destination/correction/create','module_name'=>'destination','description'=>'【异步】我要纠错','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>93,'url'=>'/{#surl}','module_name'=>'destination','description'=>'城市概述页','params'=>'{}','response'=>'{
    \"msg\": \"\",
    \"errno\": 0,
    \"user\": {
        \"username\": \"lv00_1\",
        \"uname\": \"lv00_1\",
        \"uid\": \"6272b2069fd831c240a00f5e\",
        \"nickname\": \"lv00_1\",
        \"avatar_source\": \"1\",
        \"avatar_large\": \"90816c7630305f31ec0b\",
        \"avatar_middle\": \"90816c7630305f31ec0b\",
        \"avatar_small\": \"90816c7630305f31ec0b\",
        \"self_introduction\": \"我为自己带盐\",
        \"location_sid\": \"795ac511463263cf7ae3def3\",
        \"location\": \"北京\",
        \"preferences\": [\"自驾\", \"自然风光\"],
        \"is_blocked\": 0,
        \"user_level\": \"0\",
        \"owner_level\": \"0\",
        \"admin_level\": \"2\",
        \"is_audited\": 1,
        \"trust_level\": \"0\",
        \"score\": \"1251\",
        \"wealth\": \"250\",
        \"praise_count\": \"0\",
        \"notes_count\": \"0\",
        \"notes_count_total\": \"0\",
        \"recommend_count\": \"0\",
        \"common_posts_count\": \"0\",
        \"going_count\": \"0\",
        \"gone_count\": \"0\",
        \"version_count\": \"0\",
        \"create_time\": \"1346896225\",
        \"update_time\": \"1374634786\",
        \"last_login_time\": \"1374633781\",
        \"recommend_notes_count\": \"0\",
        \"travel_count\": \"0\",
        \"travel_posts_count\": \"0\",
        \"travel_replys_count\": \"0\",
        \"foot_print_count\": \"0\",
        \"trip_route_count\": \"0\",
        \"be_recommended_count\": \"0\",
        \"favorite_count\": \"0\",
        \"pic_travel_count\": 0,
        \"is_admin\": 1,
        \"is_owner\": 0,
        \"is_daren\": 0,
        \"is_famous\": 0,
        \"is_reply_trust\": 0,
        \"has_login_record\": 1,
        \"app_has_login_record\": 0,
        \"reply_day_count\": \"0\",
        \"is_activated\": 1,
        \"has_uname\": 1,
        \"is_bindemail\": 1,
        \"usersource\": 0,
        \"is_bundle\": 0,
        \"login_src\": 0,
        \"bdstoken\": \"0cedc8a232f4ca481b6cf08d592d5b3a\",
        \"is_login\": 1
    },
    \"scene\": {
        \"sid\": \"77bc6f54bc9175003aadecf9\",
        \"surl\": \"gulangyu\",
        \"sname\": \"鼓浪屿\",
        \"parent_sid\": \"46748b2de74f2ebeee3864f0\",
        \"uid\": \"9be77020bf2cf6d51ace3a1c\",
        \"view_count\": \"3721601\",
        \"cid\": \"4\",
        \"star\": \"5\",
        \"scene_layer\": \"5\",
        \"is_china\": \"1\",
        \"vid\": \"9af33634fd0169e4b3e9cf6e\",
        \"ext\": {
            \"sid\": \"77bc6f54bc9175003aadecf9\",
            \"scene_layer\": \"5\",
            \"fmap_x\": \"820295983\",
            \"fmap_y\": \"800814957\",
            \"visit_count\": \"17514\",
            \"map_x\": \"13144044.061225\",
            \"map_y\": \"2790778.6224526\",
            \"map_info\": \"118.073672,24.45234\",
            \"going_count\": \"5468\",
            \"gone_count\": \"7812\",
            \"md5\": \"73c67c5a51788e2b8945b336b8041658\",
            \"ipad_package_md5\": \"e0e74ac2892d5cc07acbd6983a607e71\",
            \"poid\": \"0\",
            \"tpl_id\": \"3\",
            \"version_id\": \"1\",
            \"alias\": \"圆沙洲，圆洲仔\",
            \"en_sname\": \"\",
            \"address\": \" 福建省厦门市思明区\",
            \"phone\": \"咨询：0592-2060777；投诉：0592-2571226\",
            \"level\": \"AAAAA\",
            \"website\": \"http:\\/\\/www.gly.cn\\/\",
            \"visa_level\": \"0\",
            \"abs_desc\": \"万国建筑博览，音乐之岛，小资清新情调在此海上花园弥漫。\",
            \"sketch_desc\": \"\",
            \"more_desc\": \"\"
        },
        \"scene_path\": [
            {
                \"sid\": \"c921e59aba1c706693d2d7f3\",
                \"surl\": \"yazhou\",
                \"sname\": \"亚洲\",
                \"parent_sid\": \"0\"
            },
            {
                \"sid\": \"5007715ac511463263cfd1f3\",
                \"surl\": \"zhongguo\",
                \"sname\": \"中国\",
                \"parent_sid\": \"c921e59aba1c706693d2d7f3\"
            },
            {
                \"sid\": \"55163f0fd41f9757809972f0\",
                \"surl\": \"fujian\",
                \"sname\": \"福建\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\"
            },
            {
                \"sid\": \"46748b2de74f2ebeee3864f0\",
                \"surl\": \"xiamen\",
                \"sname\": \"厦门\",
                \"parent_sid\": \"55163f0fd41f9757809972f0\"
            },
            {
                \"sid\": \"77bc6f54bc9175003aadecf9\",
                \"surl\": \"gulangyu\",
                \"sname\": \"鼓浪屿\",
                \"parent_sid\": \"46748b2de74f2ebeee3864f0\"
            }
        ],
        \"has_around\": 1,
        \"going_count\": 5345,
        \"gone_count\": 38148,
        \"user_info\": {
            \"want\": {
                \"uid\": \"5700cd55760eca986659f83d\",
                \"sid\": \"6208c401f1153f0fd41f74fe\",
                \"type\": 0,
                \"go_time\": 0,
                \"time\": 0,
                \"appraise\": 0
            },
            \"gone\": {
                \"uid\": \"5700cd55760eca986659f83d\",
                \"sid\": \"6208c401f1153f0fd41f74fe\",
                \"type\": \"2\",
                \"go_time\": \"0\",
                \"time\": \"1357277263\",
                \"appraise\": \"0\"
            },
            \"user_plan\": {
                \"user_plan\": {
                    \"plan\": 0
                }
            }
        },
        \"related_notes_display_type\": \"0\",
        \"notes_list\": [],
        \"module\": \"main\",
        \"ticket_type\": 2,
        \"flight_sname\": \"北京\",
        \"scene_total\": \"729\",
        \"around_scene_list\": [{
            \"sid\": \"cc11463263cf7ae3b9d4dff3\",
            \"sname\": \"天津\",
            \"surl\": \"tianjin\",
            \"map_x\": \"13047221.988285\",
            \"map_y\": \"4712203.2331832\",
            \"is_current\": 0,
            \"pic_url\": \"622762d0f703918fae24286a513d269758eec49c\",
            \"ext\": {
                \"width\": 1280,
                \"height\": 822,
                \"size\": 154929,
                \"upload_uid\": \"628397601\",
                \"upload_uname\": \"白读绿油\"
            }
        }],
        \"relate_scene_list\": [{
            \"sid\": \"fa013f154ff17fe4381b10fe\",
            \"sname\": \"雍和宫\",
            \"surl\": \"yonghegong\",
            \"map_x\": \"12960317.701121\",
            \"map_y\": \"4831208.9564808\",
            \"is_current\": 0,
            \"pic_url\": \"96dda144ad345982d84fd4530cf431adcaef842d\",
            \"ext\": {
                \"width\": 1000,
                \"height\": 665,
                \"size\": 377981,
                \"upload_uid\": 740815674,
                \"upload_uname\": \"郭小桔fiona\"
            }
        }],
        \"map_album\": [{
            \"aid\": \"67032d66a4d8fc697f21f949\",
            \"item_id\": \"8\",
            \"type\": \"1\",
            \"title\": \"地图\",
            \"introduction\": \"\",
            \"cover_pid\": \"52b189d7effbf3e6011c4d47\",
            \"uid\": \"33e3c95d7c0151c730fbda05\",
            \"uip\": \"3528339825\",
            \"create_time\": \"1315118780\",
            \"update_time\": \"1329975226\",
            \"attr1\": \"0\",
            \"attr2\": \"0\",
            \"is_audited\": \"0\",
            \"is_deleted\": \"0\",
            \"pic_update_time\": \"1329975226\",
            \"ext_int\": \"0\",
            \"ext_str\": \"\",
            \"ext_str2\": \"\",
            \"pics_count\": \"9\",
            \"pic_url\": \"8ad4b31c8701a18b189752f99e2f07082838fe0c\",
            \"ext\": {
                \"width\": 1280,
                \"height\": 849,
                \"size\": 322519
            },
            \"is_local\": \"1\",
            \"pic_type\": \"1\",
            \"pic_list\": [{
                \"desc\": \"北京城区景点图\",
                \"ext\": {
                    \"width\": 500,
                    \"height\": 470,
                    \"size\": 73823,
                    \"upload_uid\": 13225995,
                    \"upload_uname\": \"bruce42\"
                },
                \"pic_id\": \"e6fe8ad26affbb1a569c7679\",
                \"pic_url\": \"738b4710b912c8fca1b1a566fd039245d78821de\",
                \"is_cover\": 0,
                \"create_time\": \"1371693999\",
                \"full_url\": \"http:\\/\\/c.hiphotos.baidu.com\\/lvpics\\/w%3D300\\/sign=56d738448cb1cb133e693a13ed5556da\\/738b4710b912c8fca1b1a566fd039245d78821de.jpg\"
            }]
        }],
        \"high_light_album\": {
            \"aid\": \"9f7071a3301df24f0f0b2f23\",
            \"pic_list\": [{
                \"desc\": \"\",
                \"ext\": {
                    \"width\": 980,
                    \"height\": 330,
                    \"size\": 131977,
                    \"upload_uid\": 71703881,
                    \"upload_uname\": \"marie323\"
                },
                \"pic_id\": \"c247270bd71b59c20f7ed993\",
                \"pic_url\": \"e824b899a9014c08705e1d3e0a7b02087af4f4c7\",
                \"is_cover\": 0,
                \"create_time\": \"1345455944\"
            }]
        },
        \"scene_album\": [{
            \"aid\": \"c132f0f4996e77e297423a7c\",
            \"item_id\": \"3490\",
            \"type\": \"0\",
            \"title\": \"\",
            \"introduction\": \"\",
            \"cover_pid\": \"9dfe011ce07362ffb1a24813\",
            \"uid\": \"14e657b6636162a7890a52c8\",
            \"uip\": \"2887068454\",
            \"create_time\": \"1300945604\",
            \"update_time\": \"1331876618\",
            \"attr1\": \"0\",
            \"attr2\": \"0\",
            \"is_audited\": \"0\",
            \"is_deleted\": \"0\",
            \"pic_update_time\": \"1331876618\",
            \"ext_int\": \"0\",
            \"ext_str\": \"\",
            \"ext_str2\": \"\",
            \"pics_count\": \"56\",
            \"pic_url\": \"b6045da9312ef8a41e17a2c6\",
            \"ext\": {
                \"width\": 1024,
                \"height\": 683,
                \"size\": 219731
            },
            \"is_local\": \"1\",
            \"pic_type\": \"0\",
            \"pic_list\": [{
                \"desc\": \"\",
                \"ext\": {
                    \"width\": 950,
                    \"height\": 633,
                    \"size\": 105705
                },
                \"pic_id\": \"e4cfeffbf3e6011ce0734a13\",
                \"pic_url\": \"d5462bfa71c54cd19e5146c5\",
                \"is_cover\": 0,
                \"create_time\": \"1303104371\"
            }]
        }],
        \"child_scene\": [{
            \"sid\": \"46ab733fb2cc70c0c1ec2e20\",
            \"vid\": \"3cd7ff172a09a4d975e6333e\",
            \"surl\": \"donghuamen\",
            \"sname\": \"东华门\",
            \"star\": \"2\",
            \"cid\": \"0\",
            \"map_x\": \"12958594.011371\",
            \"map_y\": \"4826856.0699305\",
            \"is_current\": 0
        }],
        \"remote_ip\": \"172.22.181.96\",
        \"remote_city\": \"北京\",
        \"hotword\": 1,
        \"hotword_list\": [{
            \"title\": \"北京一日游\",
            \"url\": \"beijingyiriyou\"
        },
        {
            \"title\": \"北京周边游\",
            \"url\": \"beijingzhoubianyou\"
        },
        {
            \"title\": \"北京两日游\",
            \"url\": \"beijingliangriyou\"
        }],
        \"content\": {
            \"line\": {
                \"list\": [{
                    \"name\": \"一日游\",
                    \"desc\": \"一天的时间，可以重点去几个著名的景点，体验海岛风情，别忘了一路上的小吃哦。\",
                    \"path\": [{
                        \"path\": [{
                            \"sid\": \"4c26526fb820db6e9728fbc4\",
                            \"surl\": \"haoyueyuan\",
                            \"sname\": \"皓月园\"
                        },
                        {
                            \"sid\": \"4823309ea171641493d817c5\",
                            \"surl\": \"gangzihouhaibinyuchang\",
                            \"sname\": \"港仔后海滨浴场\"
                        },
                        {
                            \"sid\": \"10ee222e5d285f52dec9f0c4\",
                            \"surl\": \"shuzhuanghuayuan\",
                            \"sname\": \"菽庄花园\"
                        },
                        {
                            \"sid\": \"b79bab240abb6cf9c05fccc4\",
                            \"surl\": \"riguangyan\",
                            \"sname\": \"日光岩\"
                        },
                        {
                            \"sid\": \"aac2134414443489a74461c5\",
                            \"surl\": \"zhengchenggongjinianguan\",
                            \"sname\": \"郑成功纪念馆\"
                        },
                        {
                            \"sid\": \"63b3a4c71261cb1fadacc0e3\",
                            \"surl\": \"gangqinmatou\",
                            \"sname\": \"钢琴码头\"
                        }],
                        \"desc\": \"\",
                        \"repeat_times\": \"\",
                        \"dinning\": \"菽庄花园的正门出来有几个小餐厅，因为是旅游景点的原因，岛上的饭店并不实惠，最好自备些当地特色，如鼓浪屿馅饼、麻糍等等，或者走到龙头路上吃点儿小吃。晚饭可以在龙头路上吃，不过最好还是返回厦门岛吧，那里有更多选择。\",
                        \"accordination\": \"\",
                        \"tips\": \"登日光岩之前，可以先眺望山顶的人多不多，如果很多，可以稍等下在上山，以保证能爬到最高点。\",
                        \"pic_url\": \"\",
                        \"pic_id\": \"\",
                        \"ext\": \"\",
                        \"nickname_path\": \"\"
                    }],
                    \"pic_url\": \"\",
                    \"pic_id\": \"\",
                    \"ext\": \"\",
                    \"keyword\": \"看民族英雄 俯瞰鼓浪屿 海滨戏水\",
                    \"scid\": \"49774\"
                },
                {
                    \"name\": \"二日游\",
                    \"desc\": \"两天的时间，能有足够的时间体验万国建筑的风貌、吃足够多的小吃、看足够多的风景。\",
                    \"path\": [{
                        \"path\": [{
                            \"sid\": \"e8c3db7d6111526fb820fdc9\",
                            \"surl\": \"zhaoqingtianzhujiaotang\",
                            \"sname\": \"天主教堂\"
                        },
                        {
                            \"sid\": \"53e6dc24b39f09736a73a6c4\",
                            \"surl\": \"yuyuan\",
                            \"sname\": \"毓园\"
                        },
                        {
                            \"sid\": \"10ee222e5d285f52dec9f0c4\",
                            \"surl\": \"shuzhuanghuayuan\",
                            \"sname\": \"菽庄花园\"
                        },
                        {
                            \"sid\": \"6203641493d83c0c3f151581\",
                            \"surl\": \"gangqinbowuguan\",
                            \"sname\": \"钢琴博物馆\"
                        }],
                        \"desc\": \"\",
                        \"repeat_times\": \"\",
                        \"dinning\": \"\",
                        \"accordination\": \"岛上有诸多民宿、客栈，也有宾馆。建议选客栈，有特色，有感觉，无论里巷子深处还是海边儿，都能给你很深刻的印象。\",
                        \"tips\": \"鼓浪屿一年四季都不会少了旅行团，走万国建筑路线会涉及到一些历史知识，如果不想提前做功课，可以到时候跟团听听。\",
                        \"pic_url\": \"\",
                        \"pic_id\": \"\",
                        \"ext\": \"\",
                        \"nickname_path\": \"\"
                    },
                    {
                        \"path\": [{
                            \"sid\": \"b79bab240abb6cf9c05fccc4\",
                            \"surl\": \"riguangyan\",
                            \"sname\": \"日光岩\"
                        },
                        {
                            \"sid\": \"aac2134414443489a74461c5\",
                            \"surl\": \"zhengchenggongjinianguan\",
                            \"sname\": \"郑成功纪念馆\"
                        },
                        {
                            \"sid\": \"4c26526fb820db6e9728fbc4\",
                            \"surl\": \"haoyueyuan\",
                            \"sname\": \"皓月园\"
                        },
                        {
                            \"sid\": \"63b3a4c71261cb1fadacc0e3\",
                            \"surl\": \"gangqinmatou\",
                            \"sname\": \"钢琴码头\"
                        }],
                        \"desc\": \"新的一天从日光岩开始，无论是日出之时还是上午登山，都有养眼美景。下山的时候经过郑成功纪念馆，了解民族英雄的事迹。风琴博物馆在鼓浪屿上游客较少的那一边，里面收藏了很多古老的风琴，还会有定时的表演，时间充足去看看不错。之后沿着海边儿一直走，走过钢琴码头，走向高大的郑成功像，就到了纪念郑成功的皓月园，这也是鼓浪屿之行的最后一个景点。剩下的时间就在岛上随便走走吧，到龙头路逛逛小店，买点儿馅饼、肉松，吃点儿鱼丸、麻糍，喝杯奶茶或是酸奶……从钢琴码头结束两天的鼓浪屿之旅。\",
                        \"repeat_times\": \"\",
                        \"dinning\": \"午饭可以在龙头路上吃，从风琴博物馆出来走回龙头路，就能看见很多快餐店。晚饭就用各种小吃填饱肚子吧。\",
                        \"accordination\": \"\",
                        \"tips\": \"\",
                        \"pic_url\": \"\",
                        \"pic_id\": \"\",
                        \"ext\": \"\",
                        \"nickname_path\": \"\"
                    }],
                    \"pic_url\": \"\",
                    \"pic_id\": \"\",
                    \"ext\": \"\",
                    \"recommend\": \"1\",
                    \"keyword\": \"万国建筑 登高俯瞰 体验闲适\",
                    \"scid\": \"49776\"
                }]
            }
        }
    },
    \"wise_model\": \"pc\",
    \"curr_idc\": \"t\"
}','method'=>'GET'),
    array('aid'=>94,'url'=>'/destination/around/addscene','module_name'=>'destination','description'=>'【异步】（周边游）添加景点','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>95,'url'=>'/destination/around/addtag','module_name'=>'destination','description'=>'【异步】添加筛选tag','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>96,'url'=>'/destination/around/deltag','module_name'=>'destination','description'=>'【异步】删除tag','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>97,'url'=>'/destination/around/uploadphoto','module_name'=>'destination','description'=>'【异步】周边游上传图片','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>98,'url'=>'/destination/around/updatephoto','module_name'=>'destination','description'=>'【异步】图片列表提交','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>99,'url'=>'/destination/around/updateranks','module_name'=>'destination','description'=>'【异步】排行榜提交','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>101,'url'=>'/plan/edit/$pl_id','module_name'=>'plan','description'=>'【同步】计划展示页模版数据','params'=>'{
    \"msg\": \"\",
    \"errno\": 0,
    \"plan\": {
        \"is_login\": 1,
        \"pl_id\": \"e75bf70442200322f7961389\",
        \"title\": \"kuike\",
        \"sid\": \"795ac511463263cf7ae3def3\",
        \"uid\": \"70691e34a96dd70b05e8647b\",
        \"status\": \"1\",
        \"is_deleted\": \"0\",
        \"is_privated\": \"0\",
        \"quote_pl_id\": \"0\",
        \"quote_count\": \"16\",
        \"start_time\": \"0\",
        \"create_time\": \"1376298908\",
        \"update_time\": \"1376814759\",
        \"collect_list\": {
            \"plan_collect_id\": \"bee44af0c445300504deec8f\",
            \"scene_list\": [{
                \"plan_collect_detail_id\": \"b2ac09f2e7fa0353ee8c1f2f\",
                \"plan_collect_id\": \"bee44af0c445300504deec8f\",
                \"type\": \"1\",
                \"xid\": \"9\",
                \"has_son\":\"是否有下级景点\",
                \"content\": \"{\\\"scene\\\":{\\\"sid\\\":9,\\\"fmap_x\\\":null,\\\"fmap_y\\\":null,\\\"map_x\\\":null,\\\"map_y\\\":null,\\\"ticket\\\":\\\"\\\",\\\"address\\\":null,\\\"opentime\\\":\\\"\\\",\\\"travel_time\\\":\\\"\\\\u6625\\\\u3001\\\\u79cb\\\\u4e24\\\\u5b63\\\\u9002\\\\u5b9c\\\\u3002\\\"},\\\"res\\\":[],\\\"hotel\\\":[],\\\"words\\\":[],\\\"map\\\":{\\\"fmap_x\\\":null,\\\"fmap_y\\\":null,\\\"map_x\\\":null,\\\"map_y\\\":null}}\",
                \"parent_sid\": \"9\",
                \"pic_url\":\"\",
                \"ext\":{
                    \"width\":123,
                    \"height\":345
                },
                \"url\": \"tianjin\",
                \"name\": \"天津\",
                \"map_info\":\"123.231321,43.432422\",
                \"is_china\":\"\",
                \"is_unmissable\":\"是否是不可错过\",
                \"travel_time\":\"建议游玩时间\"
            }],
            \"words_list\":[{
                \"parent_sid\":\"123\",
                \"parent_sname\":\"北京\",
                \"list\":[{
                    \"plan_collect_detail_id\": \"d81152fd11f4bfe60e5e042f\",
                    \"plan_collect_id\": \"bee44af0c445300504deec8f\",
                    \"type\": \"4\",
                    \"xid\": \"0\",
                    \"content\": \"{\\\"scene\\\":[],\\\"res\\\":[],\\\"hotel\\\":[],\\\"words\\\":{\\\"word_content\\\":\\\"\\\\u5730\\\\u94c1\\\\u7968\\\\uff0c\\\\u8bb0\\\\u4f4f\\\\u201cEZ-Link\\\\u201d\\\\u5c31\\\\u662f\\\\u4ea4\\\\u901a\\\\u5361\\\\uff0c\\\\u5728\\\\u673a\\\\u573a\\\\u7684\\\\u5730\\\\u94c1\\\\u7ad9\\\\u5c31\\\\u53ef\\\\u4ee5\\\\u4ee5\\\\u4e70\\\\u300212\\\\u65b0\\\\u5e01\\\\u4e00\\\\u5f20\\\\uff0c\\\\u5176\\\\u4e2d5\\\\u5757\\\\u662f\\\\u4e0d\\\\u53ef\\\\u9000\\\\u7684\\\\u624b\\\\u7eed\\\\u8d39\\\\u3002\\\\u7b49\\\\u8d70\\\\u7684\\\\u65f6\\\\u5019\\\\u5728\\\\u673a\\\\u573a\\\\u5c31\\\\u53ef\\\\u4ee5\\\\u9000\\\\u5361\\\\u4e86\\\\u3002\\\",\\\"word_title\\\":\\\"\\\\u65b0\\\\u52a0\\\\u5761\\\\u4ea4\\\\u901a_\\\\u65b0\\\\u52a0\\\\u5761\\\\u65c5\\\\u6e38\\\\u653b\\\\u7565\\\",\\\"word_nid\\\":\\\"\\\\\\/scene\\\\\\/view\\\\\\/b15d7068c2f160adbc2c83fb?module=traffic\\\"},\\\"map\\\":{\\\"fmap_x\\\":null,\\\"fmap_y\\\":null,\\\"map_x\\\":null,\\\"map_y\\\":null}}\",
                    \"parent_sid\": \"2133\"
                }]
            }]
        },
        \"plan_list\": [{
            \"plan_days_id\": \"054fad51e73283b9853f2218\",
            \"list\": [{
                \"plan_trips_id\": \"04d6003dc4da83d31e0fa2bc\",
                \"plan_days_id\": \"054fad51e73283b9853f2218\",
                \"pl_id\": \"e75bf70442200322f7961389\",
                \"position\": \"1\",
                \"plan_collect_detail_id\": \"d5f93128d166dd4595ea0e2f\",
                \"pic_url\":\"\",
                \"ext\":{
                    \"width\":123,
                    \"height\":345
                },
                \"url\": \"tianjin\",
                \"name\": \"天津\",
                \"map_info\":\"123.231321,43.432422\",
                \"is_china\":\"\",
                \"is_unmissable\":\"是否是不可错过\",
                \"travel_time\":\"建议游玩时间\",
                \"traffic\": \"3\",
                \"remark\": \"kuike-f3\",
                \"collect_detail\": []
            }]
        }],
        \"plan_pool\": {
            \"plan_collect_id\": \"4b6b6585c205f52d84f0cb8f\",
            \"list\": [],
            \"count\": 0
        }
    },
    \"wise_model\": \"pc\",
    \"curr_idc\": \"t\"
}','response'=>'{}','method'=>'GET'),
    array('aid'=>102,'url'=>'/destination/ajax/getscenebyids','module_name'=>'destination','description'=>'【异步】通过sid获取景点信息','params'=>'{\"sid[]\":\"sdfsdfasdfasfas\"}','response'=>'{\"errno\":0,\"msg\":\"\",\"data\":[{\"sid\":\"da6c9613cd1729d6be7822f6\",\"surl\":\"xining\",\"sname\":\"西宁\",\"parent_sid\":\"7423aa3f6703cc8575ed39f6\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"320296\",\"cid\":\"1\",\"star\":\"5\",\"scene_layer\":\"4\",\"is_china\":\"1\",\"vid\":\"626cd06a95edfff469f6ac59\",\"ext\":{\"sid\":\"da6c9613cd1729d6be7822f6\",\"scene_layer\":\"4\",\"fmap_x\":\"472465519\",\"fmap_y\":\"509947267\",\"visit_count\":\"5884\",\"map_x\":\"11326508.397162\",\"map_y\":\"4366354.2178256\",\"map_info\":\"101.746649,36.662049\",\"going_count\":\"339\",\"gone_count\":\"3275\",\"md5\":\"98aab233874b39dd2b648b2c1db7c729\",\"ipad_package_md5\":\"d76c834b4f88f4a068222c85b9f2ea9c\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"古“丝绸之路”南路和“唐蕃古道”的必经之地，自古就是西北交通要冲和军事重镇，素有“海藏咽喉”之称。\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"abs_desc\":\"古“丝绸之路”南路和“唐蕃古道”的必经之地，自古就是西北交通要冲和军事重镇，素有“海藏咽喉”之称。\",\"cover\":{\"pic_url\":\"6648d73d35575e9f9e3d6255\",\"pic_id\":\"7342eacb043fe82fee116c32\",\"ext\":\"{\\\"width\\\":800,\\\"height\\\":533,\\\"size\\\":288093}\"}}]}','method'=>'POST'),
    array('aid'=>103,'url'=>'/user/ajax/darentang','module_name'=>'user','description'=>'新达人堂气球头像展现','params'=>'{
    \"rn\": \"请求个数 默认为27\",
    \"t\": \"请求时间戳，防止缓存\",
    \"format\": \"ajax\",
}','response'=>'{
    \"errno\": \"0\",
    \"msg\": \"\",
    \"data\": {
        \"all_daren_list\":[
            {
                \"uid\":\"\",
                \"uname\":\"\",
              
            }
        
        ]
        
    }
}','method'=>'GET'),
    array('aid'=>104,'url'=>'/destination/photo/save','module_name'=>'destination','description'=>'【异步】图片添加描述等','params'=>'{
    \"pic_id\":\"c1003fe53cdf260bd71bdb0c\",
\"scene\":\"sdfsdf\",
\"bdstoken\":\"d6786a1da202b668e7b507b58e19b4c1\"
    }','response'=>'{}','method'=>'POST'),
    array('aid'=>105,'url'=>'/destination/userpic/upload','module_name'=>'destination','description'=>'【异步】用户图片上传','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>106,'url'=>'/destination/userpic/adddesc','module_name'=>'destination','description'=>'【异步】用户图片添加描述','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>107,'url'=>'/destination/ajax/getguidebygids','module_name'=>'destination','description'=>'【异步】获取路书','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>108,'url'=>'/destination/ajax/downbook','module_name'=>'destination','description'=>'【异步】攻略下载量','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>109,'url'=>'/destination/ajax/allview/{#sid}?format=ajax&cid=0&pn=1','module_name'=>'destination','description'=>'【异步】获取下级景点列表','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>110,'url'=>'/destination/ajax/getsubtickets','module_name'=>'destination','description'=>'【异步】获取门票信息','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>111,'url'=>'http://lvyou.baidu.com/{#surl}/luxian/','module_name'=>'destination','description'=>'【同步】内页-路线','params'=>'{}','response'=>'{
    \"msg\": \"\",
    \"errno\": 0,
    \"user\": {
        \"username\": \"lv00_1\",
        \"uname\": \"lv00_1\",
        \"uid\": \"6272b2069fd831c240a00f5e\",
        \"nickname\": \"lv00_1\",
        \"avatar_source\": \"1\",
        \"avatar_large\": \"90816c7630305f31ec0b\",
        \"avatar_middle\": \"90816c7630305f31ec0b\",
        \"avatar_small\": \"90816c7630305f31ec0b\",
        \"self_introduction\": \"我为自己带盐\",
        \"location_sid\": \"795ac511463263cf7ae3def3\",
        \"location\": \"北京\",
        \"preferences\": [\"自驾\", \"自然风光\"],
        \"is_blocked\": 0,
        \"user_level\": \"0\",
        \"owner_level\": \"0\",
        \"admin_level\": \"2\",
        \"is_audited\": 1,
        \"trust_level\": \"0\",
        \"score\": \"1253\",
        \"wealth\": \"250\",
        \"praise_count\": \"0\",
        \"notes_count\": \"0\",
        \"notes_count_total\": \"0\",
        \"recommend_count\": \"0\",
        \"common_posts_count\": \"0\",
        \"going_count\": \"0\",
        \"gone_count\": \"0\",
        \"version_count\": \"0\",
        \"create_time\": \"1346896225\",
        \"update_time\": \"1374634786\",
        \"last_login_time\": \"1377579862\",
        \"recommend_notes_count\": \"0\",
        \"travel_count\": \"0\",
        \"travel_posts_count\": \"0\",
        \"travel_replys_count\": \"0\",
        \"foot_print_count\": \"0\",
        \"trip_route_count\": \"0\",
        \"be_recommended_count\": \"0\",
        \"favorite_count\": \"0\",
        \"pic_travel_count\": 0,
        \"is_admin\": 1,
        \"is_owner\": 0,
        \"is_daren\": 0,
        \"is_famous\": 0,
        \"is_reply_trust\": 0,
        \"has_login_record\": 1,
        \"app_has_login_record\": 1,
        \"reply_day_count\": \"0\",
        \"is_activated\": 1,
        \"has_uname\": 1,
        \"is_bindemail\": 1,
        \"usersource\": 0,
        \"is_bundle\": 0,
        \"login_src\": 0,
        \"bdstoken\": \"d6786a1da202b668e7b507b58e19b4c1\",
        \"is_login\": 1
    },
    \"pop_photo\": \" \\r\\n\",
    \"cms_self_conf_var\": [\"pop_photo\"],
    \"scene\": {
        \"sid\": \"6701f1153f0fd41f975775f3\",
        \"surl\": \"huangshan\",
        \"sname\": \"黄山\",
        \"parent_sid\": \"5e0f8727464640351f121936\",
        \"uid\": \"9be77020bf2cf6d51ace3a1c\",
        \"view_count\": \"2084513\",
        \"cid\": \"6\",
        \"star\": \"5\",
        \"scene_layer\": \"5\",
        \"is_china\": \"1\",
        \"vid\": \"0002503ef71e010cdb36f83e\",
        \"ext\": {
            \"sid\": \"6701f1153f0fd41f975775f3\",
            \"scene_layer\": \"5\",
            \"fmap_x\": \"812745394\",
            \"fmap_y\": \"659755513\",
            \"visit_count\": \"12741\",
            \"map_x\": \"13173739.303781\",
            \"map_y\": \"3447784.8439497\",
            \"map_info\": \"118.340426,29.732177\",
            \"going_count\": \"2953\",
            \"gone_count\": \"6260\",
            \"md5\": \"87f8acc46aff82677bdef2c7e5f88c4e\",
            \"ipad_package_md5\": \"d270377c17fde79a35e0d79693f1220c\",
            \"poid\": \"0\",
            \"tpl_id\": \"1\",
            \"version_id\": \"1\",
            \"alias\": \"黟山\",
            \"en_sname\": \"Mount Huangshan\",
            \"address\": \" \",
            \"phone\": \"\",
            \"level\": \"AAAAA\",
            \"website\": \"\",
            \"visa_level\": \"0\",
            \"abs_desc\": \"“五岳归来不看山,黄山归来不看岳”已经是对黄山最好的诠释!\",
            \"sketch_desc\": \"\",
            \"more_desc\": \"\",
            \"self_notes\": \"0\"
        },
        \"going_count\": 2953,
        \"gone_count\": 6260,
        \"scene_path\": [{
            \"sid\": \"c921e59aba1c706693d2d7f3\",
            \"surl\": \"yazhou\",
            \"sname\": \"亚洲\",
            \"parent_sid\": \"0\"
        },
        {
            \"sid\": \"5007715ac511463263cfd1f3\",
            \"surl\": \"zhongguo\",
            \"sname\": \"中国\",
            \"parent_sid\": \"c921e59aba1c706693d2d7f3\"
        },
        {
            \"sid\": \"fb0af2c9c005c401f11576f3\",
            \"surl\": \"anhui\",
            \"sname\": \"安徽\",
            \"parent_sid\": \"5007715ac511463263cfd1f3\"
        },
        {
            \"sid\": \"5e0f8727464640351f121936\",
            \"surl\": \"huangshanshi\",
            \"sname\": \"黄山市\",
            \"parent_sid\": \"fb0af2c9c005c401f11576f3\"
        },
        {
            \"sid\": \"6701f1153f0fd41f975775f3\",
            \"surl\": \"huangshan\",
            \"sname\": \"黄山\",
            \"parent_sid\": \"5e0f8727464640351f121936\"
        }],
        \"nav\": [\"notes\", \"pics\", \"subscene\", \"map\", \"scene_around\", \"traffic\", \"dining\", \"accommodation\", \"shopping\", \"entertainment\", \"attention\", \"geography_history\", \"line\", \"ticket_info\"],
        \"content\": {
            \"around_scene\": {
                \"list\": [\"79154ffbffdcdfcc000b99dd\", \"3aa0363b4ffbffdcdfcc98dd\"]
            },
            \"relate_scene\": {
                \"list\": [\"9a06d41f975780992b0773fa\", \"23911cc84836d6f3c8212bda\"]
            },
            \"guide\": {
                \"list\": [\"e1534207ad387614a56290d5\"]
            },
            \"line\": {
                \"list\": [{
                    \"name\": \"大峡谷一日游\",
                    \"desc\": \"一日游当然要去非主流的西海大峡谷，这里的奇秀巍峨、清幽俊美是黄山景区传统路线无法比拟的，咱们不为日出为风景，带好粮食和登山杖出发吧！\",
                    \"path\": [{
                        \"path\": [\"taipinghu\", \"huangshan\", \"paiyunting\", \"xihaidaxiagu\", \"huangshanfeilaishi\", \"guangmingding\"],
                        \"desc\": \"早餐后乘车往太平湖景区,太平湖群山环绕，景色优美。午餐后乘太平索道登黄山，游排云亭、西海大峡谷、飞来石、光明顶等景点。晚宿山上酒店。\",
                        \"repeat_times\": \"\",
                        \"nickname_path\": [],
                        \"dinning\": \"黄山的饮食属于徽州菜系。在汤口镇的沿溪街、屯溪老街以及黄山山上都可以品尝到当地的美食。\",
                        \"accordination\": \"黄山山上宾馆不多。价格也比山下高很多，标间在700元左右，淡季会稍便宜点。每到旺季常常出现满房的情况，必须提前预订，否则只好租大衣和睡袋打地铺了。山上的宾馆一般都集中在北海、狮子峰、光明顶、玉屏楼等附近。\",
                        \"tips\": \"黄山食物的价格山上和山下有天壤之别，例如毛豆腐，臭鳜鱼等这一类的美食，最好在黄山市区品尝，比较便宜而且地道，火车站附近和汤口风景区等面向游客的地方都有。到山上尽量以填饱肚子为主，可以的话，只带一些轻便食品上去。\",
                        \"pic_url\": \"\",
                        \"pic_id\": \"\",
                        \"ext\": \"\"
                    }],
                    \"pic_url\": \"\",
                    \"pic_id\": \"\",
                    \"ext\": \"\",
                    \"keyword\": \"奇秀 巍峨 俊美\",
                    \"bigPath\": \"0\",
                    \"scid\": \"6190\"
                }]
            },
        \"around_scene_list\": [{
            \"sid\": \"79154ffbffdcdfcc000b99dd\",
            \"sname\": \"宏村\",
            \"surl\": \"hongcun\",
            \"map_x\": \"13135634.670961\",
            \"map_y\": \"3482849.8141866\",
            \"is_current\": 0,
            \"pic_url\": \"86d6277f9e2f07085072bfb8e924b899a901f217\",
            \"ext\": {
                \"width\": 1500,
                \"height\": 750,
                \"size\": 470453
            }
        },
        {
            \"sid\": \"3aa0363b4ffbffdcdfcc98dd\",
            \"sname\": \"西递\",
            \"surl\": \"xidi\",
            \"map_x\": \"13135705.472716\",
            \"map_y\": \"3470180.524706\",
            \"is_current\": 0,
            \"pic_url\": \"30ecd5ef18c7ba5fadafd51d\",
            \"ext\": {
                \"width\": 1024,
                \"height\": 740,
                \"size\": 310936
            }
        }],
        \"relate_scene_list\": [{
            \"sid\": \"9a06d41f975780992b0773fa\",
            \"sname\": \"庐山\",
            \"surl\": \"lushan\",
            \"map_x\": \"12911991.716278\",
            \"map_y\": \"3440089.7600752\",
            \"is_current\": 0,
            \"pic_url\": \"2f738bd4b31c8701a38f9647277f9e2f0708ff51\",
            \"ext\": {
                \"width\": 349,
                \"height\": 210,
                \"size\": 83270
            }
        },
        {
            \"sid\": \"23911cc84836d6f3c8212bda\",
            \"sname\": \"泰山\",
            \"surl\": \"taishan\",
            \"map_x\": \"13039579.042846\",
            \"map_y\": \"4301603.6628773\",
            \"is_current\": 0,
            \"pic_url\": \"7ac880515866757c43a75b0a\",
            \"ext\": {
                \"width\": 1279,
                \"height\": 853,
                \"size\": 74996
            }
        }],
        \"scene_business\": {
            \"sid\": \"6701f1153f0fd41f975775f3\",
            \"hotel_index_site\": \"0\",
            \"hotel_list_site\": \"1\",
            \"flight_index_site\": \"2\",
            \"flight_list_site\": \"0\",
            \"ticket_index_site\": \"3\",
            \"hotel_ext\": \"\"
        },
        \"module\": \"line\"
    },
    \"wise_model\": \"pc\",
    \"curr_idc\": \"t\"
}','method'=>'GET'),
    array('aid'=>112,'url'=>'/destination/ajax/gettickets','module_name'=>'destination','description'=>'【异步】右边栏获取门票','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>113,'url'=>'/destination/ajax/guidefeed?format=ajax','module_name'=>'destination','description'=>'【异步】攻略-下载动态','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>114,'url'=>'/destination/ajax/books?format=ajax','module_name'=>'destination','description'=>'【异步】攻略-获取路书总数','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>115,'url'=>'/destination/top?format=xml','module_name'=>'destination','description'=>'【异步】获取指南页flash地图数据','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>116,'url'=>'/destination/ajax/poi/dining','module_name'=>'destination','description'=>'【异步】获取美食列表','params'=>'{}','response'=>'{}','method'=>'GET'),
    array('aid'=>117,'url'=>'/destination/ajax/getsmallscenes','module_name'=>'destination','description'=>'【异步】获取小线路景点数据','params'=>'{}','response'=>'{}','method'=>'POST'),
    array('aid'=>118,'url'=>'/beijing/jingdian/','module_name'=>'destination','description'=>'全部景点页面','params'=>'{
    \"surl\":\"dfdf\"}','response'=>'
{
  \"errno\": 0,
  \"msg\": \"\",
  \"data\": {\"user\":{\"is_login\":0},\"pop_sidebar1\":\" \",\"pop_sidebar2\":\"<div class=\\\"app-download pr nslog-show\\\" data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"show\\\",\\\"pos\\\":\\\"app-download-show\\\"}\'>\\r\\n<div class=\\\"nslog-area\\\" data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"click\\\",\\\"pos\\\":\\\"app-total-click\\\"}\'>\\r\\n    <a data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"click\\\",\\\"pos\\\":\\\"app-icon-click\\\"}\' target=\\\"_blank\\\" class=\\\"nslog app-icon\\\" href=\\\"\\/app\\/baidulvyou?from=scene\\\"><\\/a>\\r\\n    <a data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"click\\\",\\\"pos\\\":\\\"app-iphone-click\\\"}\' target=\\\"_blank\\\" class=\\\"app-icon phone-ios nslog\\\" href=\\\"https:\\/\\/itunes.apple.com\\/cn\\/app\\/id467046753?mt=8\\\"><\\/a>\\r\\n    <a data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"click\\\",\\\"pos\\\":\\\"app-pad-click\\\"}\' target=\\\"_blank\\\" class=\\\"app-icon phone-pad nslog\\\" href=\\\"https:\\/\\/itunes.apple.com\\/cn\\/app\\/bai-du-lu-youhd\\/id621986255?mt=8\\\"><\\/a>\\r\\n    <a data-nslog=\'{\\\"type\\\":1100,\\\"page\\\":\\\"index\\\",\\\"cmd\\\":\\\"click\\\",\\\"pos\\\":\\\"app-android-click\\\"}\' target=\\\"_blank\\\" class=\\\"app-icon phone-android nslog\\\" href=\\\"http:\\/\\/lv.baidu.com\\/event\\/s\\/app\\/baidutrip_andr_1000.apk\\\"><\\/a>\\r\\n    <\\/div>\\r\\n<\\/div>\\r\\n<style>\\r\\n.app-download{\\r\\n    width:260px;\\r\\n    height:127px;\\r\\n    background: #f7f7f7 url(\\\"http:\\/\\/lvyou.baidu.com\\/static\\/absolute\\/app-download-bg.jpg\\\") no-repeat;\\r\\n}\\r\\n.app-download .app-icon{\\r\\n    position: absolute;\\r\\n    top:16px; left: 16px; width: 54px; height: 54px;\\r\\n}\\r\\n.app-download .app-icon:hover{\\r\\n    background: #f7f7f7 url(\\\"http:\\/\\/lvyou.baidu.com\\/static\\/absolute\\/app-download-btn.jpg\\\") no-repeat 0 0;\\r\\n}\\r\\n.app-download .phone-ios,\\r\\n.app-download .phone-pad,\\r\\n.app-download .phone-android{\\r\\n    width: 71px;\\r\\n    height: 25px;\\r\\n    left: 7px;\\r\\n    top: 80px;\\r\\n}\\r\\n.app-download .phone-pad{\\r\\n    left: 85px;\\r\\n}\\r\\n.app-download .phone-android{\\r\\n    left:162px;\\r\\n}\\r\\n.app-download .phone-ios:hover{\\r\\n    background-position: -74px -24px;\\r\\n}\\r\\n.app-download .phone-pad:hover{\\r\\n    background-position: -152px -24px;\\r\\n}\\r\\n.app-download .phone-android:hover{\\r\\n    background-position: -229px -24px;\\r\\n}\\r\\n<\\/style>\",\"pop_sidebar3\":\"[\\r\\n    {\\r\\n        \\\"sname\\\":\\\"\\u54c8\\u5c14\\u6ee8\\\",\\r\\n        \\\"sid\\\": \\\"c45891ca87274646403518f7\\\",\\r\\n        \\\"surl\\\": \\\"haerbin\\\",\\r\\n        \\\"android_url\\\": \\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/haerbin.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https:\\/\\/itunes.apple.com\\/cn\\/app\\/chu-fa-ha-er-bin\\/id594749116?mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/haerbin-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"\\u9999\\u6e2f\\\",\\r\\n        \\\"sid\\\": \\\"79c0adc41efa15d8330ab4f5\\\",\\r\\n        \\\"surl\\\": \\\"xianggang\\\",\\r\\n        \\\"android_url\\\": \\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/hongkong.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https:\\/\\/itunes.apple.com\\/us\\/app\\/chu-fa-xiang-gang-shi-yong\\/id596693479?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/xianggang-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"\\u53a6\\u95e8\\\",\\r\\n        \\\"sid\\\": \\\"46748b2de74f2ebeee3864f0\\\",\\r\\n        \\\"surl\\\": \\\"xiamen\\\",\\r\\n        \\\"android_url\\\": \\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/xiamen.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https:\\/\\/itunes.apple.com\\/us\\/app\\/chu-fa-sha-men-shi-yong-lu\\/id596678160?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/xiamen-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"\\u4e09\\u4e9a\\\",\\r\\n        \\\"sid\\\": \\\"052a5d285f52dec9c3f9f1f7 \\\",\\r\\n        \\\"surl\\\": \\\"sanya\\\",\\r\\n        \\\"android_url\\\": \\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/andorid-lvyou-walk-sanya-release.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https:\\/\\/itunes.apple.com\\/us\\/app\\/chu-fa-san-ya-shi-yong-lu\\/id597817254?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/sanya-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"\\u4e3d\\u6c5f\\\",\\r\\n        \\\"sid\\\": \\\"5ecd8727464640351f1219f4\\\",\\r\\n        \\\"surl\\\": \\\"lijiang\\\",\\r\\n        \\\"android_url\\\": \\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/andorid-lvyou-walk-lijiang-release.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https:\\/\\/itunes.apple.com\\/us\\/app\\/chu-fa-li-jiang-shi-yong-lu\\/id598888418?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/lijiang-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"\\u5317\\u4eac\\\",\\r\\n        \\\"sid\\\": \\\"795ac511463263cf7ae3def3\\\",\\r\\n        \\\"surl\\\": \\\"beijing\\\",\\r\\n        \\\"android_url\\\": \\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/beijing.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https:\\/\\/itunes.apple.com\\/us\\/app\\/chu-fa-bei-jing-shi-yong-lu\\/id598239439?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/beijing-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"\\u676d\\u5dde\\\",\\r\\n        \\\"sid\\\": \\\"41fd1e4019c66b17a516aaf1\\\",\\r\\n        \\\"surl\\\": \\\"hangzhou\\\",\\r\\n        \\\"android_url\\\": \\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/hangzhou.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https:\\/\\/itunes.apple.com\\/us\\/app\\/chu-fa-hang-zhou-shi-yong\\/id626211446?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/hangzhou-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"\\u5fb7\\u56fd\\\",\\r\\n        \\\"sid\\\": \\\"cecc1efa15d8330a2308b5fb\\\",\\r\\n        \\\"surl\\\": \\\"germany\\\",\\r\\n        \\\"android_url\\\": \\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/germany.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https:\\/\\/itunes.apple.com\\/us\\/app\\/chu-fa-guo-shi-yong-lu-xing\\/id651355826?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/germany-icon.png\\\"\\r\\n    },{\\r\\n        \\\"sname\\\":\\\"\\u53f0\\u6e7e\\\",\\r\\n        \\\"sid\\\": \\\"9cf3f47a261257ae7e7e5df5\\\",\\r\\n        \\\"surl\\\": \\\"taiwan\\\",\\r\\n        \\\"android_url\\\": \\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/taiwan.apk\\\",\\r\\n        \\\"ios_url\\\": \\\"https:\\/\\/itunes.apple.com\\/us\\/app\\/chu-fa-tai-wan-shi-yong-lu\\/id660008762?ls=1&mt=8\\\",\\r\\n        \\\"icon_url\\\":\\\"http:\\/\\/lvyou.baidu.com\\/event\\/s\\/app\\/taiwan-icon.png\\\"\\r\\n    }\\r\\n]\",\"pop_sidebar4\":\"<a title=\\\"\\u767e\\u79d1\\u6c42\\u77e5\\\" href=\\\"http:\\/\\/baike.baidu.com\\/feature\\/mandela\\/index.html\\\" target=\\\"_blank\\\"><img width=\\\"360\\\" height=\\\"130\\\" src=\\\"http:\\/\\/baike.baidu.com\\/cms\\/s\\/mandela\\/260x130.png\\\" \\/><\\/a>\\r\\n\",\"cms_self_conf_var\":[\"pop_sidebar1\",\"pop_sidebar2\",\"pop_sidebar3\",\"pop_sidebar4\"],\"scene\":{\"sid\":\"5ecd8727464640351f1219f4\",\"surl\":\"lijiang\",\"sname\":\"\\u4e3d\\u6c5f\",\"parent_sid\":\"17070a5c91ca872746461bf4\",\"uid\":\"e66c44b50a92371d9b32939b\",\"view_count\":\"3232612\",\"cid\":\"2\",\"star\":\"5\",\"scene_layer\":\"4\",\"is_china\":\"1\",\"vid\":\"b9b47115658d04211dc8f57e\",\"ext\":{\"sid\":\"5ecd8727464640351f1219f4\",\"scene_layer\":\"4\",\"fmap_x\":\"459075808\",\"fmap_y\":\"755632790\",\"visit_count\":\"20949\",\"map_x\":\"11157696.565\",\"map_y\":\"3089952.0592873\",\"map_info\":\"100.230203,26.887725 \",\"going_count\":\"6788\",\"gone_count\":\"8666\",\"md5\":\"cfb0cd8b50085a9de8b8261e6ff3a8a2\",\"ipad_package_md5\":\"9f31150c0e24dc7b2986d0117b56118f\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\\u4e3d\\u6c5f\\u53e4\\u57ce\",\"en_sname\":\"Lijiang\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"\\u6211\\u4eec\\u6765\\u4e3d\\u6c5f\\uff0c\\u9047\\u89c1\\u81ea\\u5df1\\uff0c\\u9057\\u5fd8\\u8fc7\\u5f80\\uff0c\\u6f2b\\u6b65\\u53e4\\u57ce\\u611f\\u53d7\\u95f2\\u9002\\u5149\\u9634\\u91cc\\u7684\\u4e00\\u82b1\\u4e00\\u6728\\uff0c\\u8ba9\\u5348\\u540e\\u7684\\u4e00\\u7c73\\u9633\\u5149\\u4e00\\u4e0b\\u5b50\\u7167\\u8fdb\\u5fc3\\u4e2d\\u6700\\u67d4\\u8f6f\\u7684\\u5730\\u65b9\\u3002\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"going_count\":6788,\"gone_count\":8666,\"scene_path\":[{\"sid\":\"c921e59aba1c706693d2d7f3\",\"surl\":\"yazhou\",\"sname\":\"\\u4e9a\\u6d32\",\"parent_sid\":\"0\"},{\"sid\":\"5007715ac511463263cfd1f3\",\"surl\":\"zhongguo\",\"sname\":\"\\u4e2d\\u56fd\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\"},{\"sid\":\"17070a5c91ca872746461bf4\",\"surl\":\"yunnan\",\"sname\":\"\\u4e91\\u5357\",\"parent_sid\":\"5007715ac511463263cfd1f3\"},{\"sid\":\"5ecd8727464640351f1219f4\",\"surl\":\"lijiang\",\"sname\":\"\\u4e3d\\u6c5f\",\"parent_sid\":\"17070a5c91ca872746461bf4\"}],\"nav\":[\"main\",\"notes\",\"photolist\",\"allview\",\"map\",\"around\",\"traffic\",\"dining\",\"accommodation\",\"shopping\",\"entertainment\",\"attention\",\"geography_history\",\"line\",\"ticket_info\"],\"module\":\"allview\",\"scene_total\":102,\"current_page\":1,\"current_cid\":null,\"screen_list\":[{\"cid\":500,\"cname\":\"\\u57ce\\u5e02\"},{\"cid\":501,\"cname\":\"\\u53e4\\u9547\\u4e61\\u6751\"},{\"cid\":503,\"cname\":\"\\u81ea\\u7136\\u666f\\u89c2\"},{\"cid\":504,\"cname\":\"\\u4eba\\u6587\\u666f\\u89c2\"},{\"cid\":505,\"cname\":\"\\u5c55\\u9986\"},{\"cid\":507,\"cname\":\"\\u4f11\\u95f2\\u5ea6\\u5047\"},{\"cid\":508,\"cname\":\"\\u5176\\u4ed6\"}],\"scene_list\":[{\"sid\":\"b15d7068c2f160adbc2c83fb\",\"surl\":\"xinjiapo\",\"sname\":\"\\u65b0\\u52a0\\u5761\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"870509\",\"cid\":\"27\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"ad4346266af590167f92cb66\",\"ext\":{\"sid\":\"b15d7068c2f160adbc2c83fb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"1733\",\"map_x\":\"11546382.429057\",\"map_y\":\"156968.46144143\",\"map_info\":\"103.715308,1.413604\",\"going_count\":\"1122\",\"gone_count\":\"529\",\"md5\":\"3c1a62131c8ddc24191d641ba0f61b24\",\"ipad_package_md5\":\"60d3258ef42c4b61dfeae4080d51f26b\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\\u72ee\\u57ce\",\"en_sname\":\"Singapore\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"3\",\"abs_desc\":\"\\u5979\\u662f\\u5178\\u578b\\u7684\\u57ce\\u5e02\\u56fd\\u5bb6\\uff0c\\u5979\\u4ee5\\u201c\\u82b1\\u56ed\\u57ce\\u5e02\\u201d\\u8457\\u79f0\\uff0c\\u5979\\u5b55\\u80b2\\u4e86\\u4e9a\\u6d32\\u56db\\u5c0f\\u9f99\\u4e4b\\u4e00\\uff0c\\u65b0\\u52a0\\u5761\\u7528\\u81ea\\u5df1\\u7684\\u7e41\\u8363\\u3001\\u6574\\u6d01\\u3001\\u5a31\\u4e50\\u3001\\u6c11\\u98ce\\u3001\\u6c14\\u5019\\u5438\\u5f15\\u7740\\u6e38\\u5ba2\\u7eb7\\u81f3\\u6c93\\u6765\\u3002\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"3812b31bb051f8193bdb78ffdab44aed2f73e78d\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":683,\\\"size\\\":125067}\",\"full_url\":\"http:\\/\\/f.hiphotos.baidu.com\\/\\/lvpics\\/w%3D300\\/sign=b4e7e59d972bd40742c7d5fd4b889e9c\\/3812b31bb051f8193bdb78ffdab44aed2f73e78d.jpg\"},\"abs_desc\":\"\\u5979\\u662f\\u5178\\u578b\\u7684\\u57ce\\u5e02\\u56fd\\u5bb6\\uff0c\\u5979\\u4ee5\\u201c\\u82b1\\u56ed\\u57ce\\u5e02\\u201d\\u8457\\u79f0\\uff0c\\u5979\\u5b55\\u80b2\\u4e86\\u4e9a\\u6d32\\u56db\\u5c0f\\u9f99\\u4e4b\\u4e00\\uff0c\\u65b0\\u52a0\\u5761\\u7528\\u81ea\\u5df1\\u7684\\u7e41\\u8363\\u3001\\u6574\\u6d01\\u3001\\u5a31\\u4e50\\u3001\\u6c11\\u98ce\\u3001\\u6c14\\u5019\\u5438\\u5f15\\u7740\\u6e38\\u5ba2\\u7eb7\\u81f3\\u6c93\\u6765\\u3002\",\"level\":\"5\"},{\"sid\":\"1d5cb0656bc57594baebbffb\",\"surl\":\"maerdaifu\",\"sname\":\"\\u9a6c\\u5c14\\u4ee3\\u592b\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"892220\",\"cid\":\"1\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"ea9e0d80c17adf73df421941\",\"ext\":{\"sid\":\"1d5cb0656bc57594baebbffb\",\"scene_layer\":\"2\",\"fmap_x\":\"679434387\",\"fmap_y\":\"630124077\",\"visit_count\":\"3646\",\"map_x\":\"8195348.2433942\",\"map_y\":\"601182.18140267\",\"map_info\":\"73.612731,5.423207\",\"going_count\":\"2822\",\"gone_count\":\"570\",\"md5\":\"b8e777fe775302b40e0a8f95a411ccd1\",\"ipad_package_md5\":\"a606f8cc02537f55a1baae84f43fd9d3\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"Maldives\",\"address\":\" \",\"phone\":\"\",\"level\":\"--\",\"website\":\"\",\"visa_level\":\"3\",\"abs_desc\":\"\\u5168\\u7403\\u9876\\u7ea7\\u7684\\u6d77\\u5c9b\\u5ea6\\u5047\\u5723\\u5730\\uff0c\\u54ea\\u6015\\u53ea\\u662f\\u60ca\\u9e3f\\u4e00\\u77a5\\uff0c\\u5979\\u90fd\\u4f1a\\u4ee4\\u4f60\\u96be\\u4ee5\\u5fd8\\u8bb0\\u3002\\u5f53\\u4f60\\u4e58\\u5750\\u7684\\u98de\\u673a\\u51b2\\u51fa\\u4e91\\u5c42\\uff0c\\u8000\\u773c\\u7684\\u767d\\u6c99\\u5c9b\\u548c\\u7eff\\u5b9d\\u77f3\\u822c\\u7684\\u7901\\u6e56\\u5c31\\u4f1a\\u4e00\\u4e0b\\u5b50\\u5448\\u73b0\\u5728\\u4f60\\u773c\\u524d\\u3002\\u7b49\\u4e0d\\u53ca\\u98de\\u673a\\u964d\\u843d\\uff0c\\u4f60\\u5c31\\u4f1a\\u575a\\u4fe1\\uff0c\\u8fd9\\u91cc\\u5c31\\u662f\\u5929\\u5802\\u3002\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"0823dd54564e92580da57ba49c82d158cdbf4ee3\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":768,\\\"size\\\":211865}\",\"full_url\":\"http:\\/\\/e.hiphotos.baidu.com\\/\\/lvpics\\/w%3D300\\/sign=f2716bb67cd98d1076d40a31113eb807\\/0823dd54564e92580da57ba49c82d158cdbf4ee3.jpg\"},\"abs_desc\":\"\\u5168\\u7403\\u9876\\u7ea7\\u7684\\u6d77\\u5c9b\\u5ea6\\u5047\\u5723\\u5730\\uff0c\\u54ea\\u6015\\u53ea\\u662f\\u60ca\\u9e3f\\u4e00\\u77a5\\uff0c\\u5979\\u90fd\\u4f1a\\u4ee4\\u4f60\\u96be\\u4ee5\\u5fd8\\u8bb0\\u3002\\u5f53\\u4f60\\u4e58\\u5750\\u7684\\u98de\\u673a\\u51b2\\u51fa\\u4e91\\u5c42\\uff0c\\u8000\\u773c\\u7684\\u767d\\u6c99\\u5c9b\\u548c\\u7eff\\u5b9d\\u77f3\\u822c\\u7684\\u7901\\u6e56\\u5c31\\u4f1a\\u4e00\\u4e0b\\u5b50\\u5448\\u73b0\\u5728\\u4f60\\u773c\\u524d\\u3002\\u7b49\\u4e0d\\u53ca\\u98de\\u673a\\u964d\\u843d\\uff0c\\u4f60\\u5c31\\u4f1a\\u575a\\u4fe1\\uff0c\\u8fd9\\u91cc\\u5c31\\u662f\\u5929\\u5802\\u3002\",\"level\":\"5\"},{\"sid\":\"d7e376b3690f23d1dc24bbfb\",\"surl\":\"hanguo\",\"sname\":\"\\u97e9\\u56fd\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"776761\",\"cid\":\"1\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"d45964f842d9792d1f58d97d\",\"ext\":{\"sid\":\"d7e376b3690f23d1dc24bbfb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"2405\",\"map_x\":\"14118663.980019\",\"map_y\":\"4490752.8334306\",\"map_info\":\"126.822313,37.550837\",\"going_count\":\"1934\",\"gone_count\":\"420\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"Korea\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"\\u5927\\u6d77\\u3001\\u6d77\\u9c9c\\u3001\\u7f8e\\u98df\\u3001\\u7f8e\\u5973\\u3001\\u6e56\\u6cca\\u3001\\u96ea\\u666f\\uff0c\\u53e4\\u5239\\u3001\\u9ad8\\u5854\\uff0cshopping\\u3001\\u6563\\u6b65\\uff0c\\u97e9\\u56fd\\u7684\\u5173\\u952e\\u8bcd\\u65e0\\u6cd5\\u4e00\\u4e00\\u5217\\u4e3e\\uff0c\\u8ba9\\u97e9\\u6d41\\u628a\\u4f60\\u522e\\u8fdb\\u6765\\u5427\\u3002\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"d043ad4bd11373f0d3b6c7d5a40f4bfbfaed04ea\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":683,\\\"size\\\":495765}\",\"full_url\":\"http:\\/\\/b.hiphotos.baidu.com\\/\\/lvpics\\/w%3D300\\/sign=ce8965a6d100baa1ba2c41bb7711b9b1\\/d043ad4bd11373f0d3b6c7d5a40f4bfbfaed04ea.jpg\"},\"abs_desc\":\"\\u5927\\u6d77\\u3001\\u6d77\\u9c9c\\u3001\\u7f8e\\u98df\\u3001\\u7f8e\\u5973\\u3001\\u6e56\\u6cca\\u3001\\u96ea\\u666f\\uff0c\\u53e4\\u5239\\u3001\\u9ad8\\u5854\\uff0cshopping\\u3001\\u6563\\u6b65\\uff0c\\u97e9\\u56fd\\u7684\\u5173\\u952e\\u8bcd\\u65e0\\u6cd5\\u4e00\\u4e00\\u5217\\u4e3e\\uff0c\\u8ba9\\u97e9\\u6d41\\u628a\\u4f60\\u522e\\u8fdb\\u6765\\u5427\\u3002\",\"level\":\"5\"},{\"sid\":\"f836c6adcd2feedcbaf18bfb\",\"surl\":\"riben\",\"sname\":\"\\u65e5\\u672c\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"484735\",\"cid\":\"0\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"f2717532631a2e19fe0c7858\",\"ext\":{\"sid\":\"f836c6adcd2feedcbaf18bfb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"2281\",\"map_x\":\"15551846.397206\",\"map_y\":\"4234154.2180015\",\"map_info\":\"139.696655,35.692995\",\"going_count\":\"1837\",\"gone_count\":\"399\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"Japan\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"2\",\"abs_desc\":\"\\u6625\\u89c2\\u591c\\u6a31\\u3001\\u590f\\u770b\\u78a7\\u6d77\\u3001\\u79cb\\u89c1\\u7ea2\\u53f6\\u3001\\u51ac\\u8e0f\\u843d\\u96ea\\u3002\\u65e5\\u672c\\u5728\\u5979\\u6f6e\\u6d41\\u7684\\u5916\\u8868\\u4e0b\\uff0c\\u4f9d\\u7136\\u4fdd\\u6301\\u7740\\u4f20\\u7edf\\u7684\\u6a21\\u6837\\uff0c\\u51c6\\u5907\\u5bf9\\u6765\\u5230\\u8fd9\\u91cc\\u7684\\u6bcf\\u4e00\\u4f4d\\u6e38\\u5ba2\\u7528\\u5979\\u90a3\\u4e0d\\u80dc\\u51c9\\u82b1\\u7684\\u5a07\\u7f9e\\u9053\\u4e00\\u53e5\\uff0c\\u6c99\\u626c\\u5a1c\\u62c9\\u3002\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"58c3acb78f58f0a330add1f7\",\"ext\":\"{\\\"width\\\":600,\\\"height\\\":364,\\\"size\\\":54114}\",\"full_url\":\"http:\\/\\/h.hiphotos.baidu.com\\/\\/lvpics\\/w%3D300\\/sign=ce755cbb08fa513d51aa6ade0d6c554c\\/58c3acb78f58f0a330add1f7.jpg\"},\"abs_desc\":\"\\u6625\\u89c2\\u591c\\u6a31\\u3001\\u590f\\u770b\\u78a7\\u6d77\\u3001\\u79cb\\u89c1\\u7ea2\\u53f6\\u3001\\u51ac\\u8e0f\\u843d\\u96ea\\u3002\\u65e5\\u672c\\u5728\\u5979\\u6f6e\\u6d41\\u7684\\u5916\\u8868\\u4e0b\\uff0c\\u4f9d\\u7136\\u4fdd\\u6301\\u7740\\u4f20\\u7edf\\u7684\\u6a21\\u6837\\uff0c\\u51c6\\u5907\\u5bf9\\u6765\\u5230\\u8fd9\\u91cc\\u7684\\u6bcf\\u4e00\\u4f4d\\u6e38\\u5ba2\\u7528\\u5979\\u90a3\\u4e0d\\u80dc\\u51c9\\u82b1\\u7684\\u5a07\\u7f9e\\u9053\\u4e00\\u53e5\\uff0c\\u6c99\\u626c\\u5a1c\\u62c9\\u3002\",\"level\":\"5\"},{\"sid\":\"334845d63412748e363b9dfb\",\"surl\":\"yuenan\",\"sname\":\"\\u8d8a\\u5357\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"504238\",\"cid\":\"27\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"08001403e89b108290211141\",\"ext\":{\"sid\":\"334845d63412748e363b9dfb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"869\",\"map_x\":\"11729343.894337\",\"map_y\":\"2423673.3027584\",\"map_info\":\"105.358887,21.391705\",\"going_count\":\"626\",\"gone_count\":\"214\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"Vietnam\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"\\u4e70\\u4e00\\u5f20OPENBUS\\u7684\\u8f66\\u7968\\uff0c\\u6765\\u4e00\\u6b21\\u7eb5\\u8d2f\\u8d8a\\u5357\\u5357\\u5317\\u7684\\u65c5\\u884c\\uff0c\\u4e58\\u5750\\u5c0f\\u8239\\u6216\\u662f\\u516c\\u5171\\u6c7d\\u8f66\\u5f00\\u59cb\\u5192\\u9669\\uff0c\\u5982\\u679c\\u4f60\\u80c6\\u5b50\\u591f\\u5927\\uff0c\\u4e0d\\u59a8\\u8df3\\u4e0a\\u4e00\\u8f86\\u6469\\u7684\\u3002\",\"sketch_desc\":\"\",\"more_desc\":\"\\u053d\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"55a628d15fa2446f9a502741\",\"ext\":\"{\\\"width\\\":800,\\\"height\\\":600,\\\"size\\\":270531}\",\"full_url\":\"http:\\/\\/a.hiphotos.baidu.com\\/\\/lvpics\\/w%3D300\\/sign=7c7f2a9d7bcb0a4685228d395b62f63e\\/55a628d15fa2446f9a502741.jpg\"},\"abs_desc\":\"\\u4e70\\u4e00\\u5f20OPENBUS\\u7684\\u8f66\\u7968\\uff0c\\u6765\\u4e00\\u6b21\\u7eb5\\u8d2f\\u8d8a\\u5357\\u5357\\u5317\\u7684\\u65c5\\u884c\\uff0c\\u4e58\\u5750\\u5c0f\\u8239\\u6216\\u662f\\u516c\\u5171\\u6c7d\\u8f66\\u5f00\\u59cb\\u5192\\u9669\\uff0c\\u5982\\u679c\\u4f60\\u80c6\\u5b50\\u591f\\u5927\\uff0c\\u4e0d\\u59a8\\u8df3\\u4e0a\\u4e00\\u8f86\\u6469\\u7684\\u3002\",\"level\":\"5\"},{\"sid\":\"dbf91bc6adc41efa15d8b7fb\",\"surl\":\"niboer\",\"sname\":\"\\u5c3c\\u6cca\\u5c14\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"346409\",\"cid\":\"1\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"f9f7047830da8e000c9b236b\",\"ext\":{\"sid\":\"dbf91bc6adc41efa15d8b7fb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"859\",\"map_x\":\"9500061.5041765\",\"map_y\":\"3191813.4236672\",\"map_info\":\"85.333157,27.699032\",\"going_count\":\"732\",\"gone_count\":\"124\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"Nepal\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"3\",\"abs_desc\":\"\\u5728\\u8fd9\\u5ea7\\u559c\\u9a6c\\u62c9\\u96c5\\u5c71\\u811a\\u4e0b\\u7684\\u56fd\\u5ea6\\uff0c\\u7a7f\\u68ad\\u5370\\u5ea6\\u6559\\u4e0e\\u4f5b\\u6559\\u878d\\u5408\\u7684\\u5bfa\\u5e99\\u4e2d\\uff0c\\u6bcf\\u5929\\u90fd\\u6709\\u4eba\\u5fae\\u7b11\\u7740\\u5bf9\\u4f60\\u8bf4Namaste\\u3002\\u4e0d\\u7ba1\\u5f92\\u6b65\\u6216\\u773a\\u671b\\uff0c\\u5c3c\\u6cca\\u5c14\\u90fd\\u80fd\\u6ee1\\u8db3\\u4f60\\u5bf9\\u96ea\\u5c71\\u7684\\u6240\\u6709\\u671f\\u5f85\\u3002\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"9358d109b3de9c82b5618fc56c81800a19d84377\",\"ext\":\"{\\\"width\\\":900,\\\"height\\\":600,\\\"size\\\":299226}\",\"full_url\":\"http:\\/\\/e.hiphotos.baidu.com\\/\\/lvpics\\/w%3D300\\/sign=e92942933901213fcf3348dc64e636f8\\/9358d109b3de9c82b5618fc56c81800a19d84377.jpg\"},\"abs_desc\":\"\\u5728\\u8fd9\\u5ea7\\u559c\\u9a6c\\u62c9\\u96c5\\u5c71\\u811a\\u4e0b\\u7684\\u56fd\\u5ea6\\uff0c\\u7a7f\\u68ad\\u5370\\u5ea6\\u6559\\u4e0e\\u4f5b\\u6559\\u878d\\u5408\\u7684\\u5bfa\\u5e99\\u4e2d\\uff0c\\u6bcf\\u5929\\u90fd\\u6709\\u4eba\\u5fae\\u7b11\\u7740\\u5bf9\\u4f60\\u8bf4Namaste\\u3002\\u4e0d\\u7ba1\\u5f92\\u6b65\\u6216\\u773a\\u671b\\uff0c\\u5c3c\\u6cca\\u5c14\\u90fd\\u80fd\\u6ee1\\u8db3\\u4f60\\u5bf9\\u96ea\\u5c71\\u7684\\u6240\\u6709\\u671f\\u5f85\\u3002\",\"level\":\"5\"},{\"sid\":\"d649a4211acb2b02abe64ffd\",\"surl\":\"xuliya\",\"sname\":\"\\u53d9\\u5229\\u4e9a\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"05cdcde05e0d9fd831c2080a\",\"view_count\":\"4567\",\"cid\":\"27\",\"star\":\"3\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"e2c3cce53e093f57a802c237\",\"ext\":{\"sid\":\"d649a4211acb2b02abe64ffd\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"14\",\"map_x\":\"0\",\"map_y\":\"0\",\"map_info\":\"\",\"going_count\":\"12\",\"gone_count\":\"3\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"0\",\"version_id\":\"0\",\"alias\":\"\\u963f\\u62c9\\u4f2f\\u53d9\\u5229\\u4e9a\\u5171\\u548c\\u56fd\",\"en_sname\":\"Syria\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"b9d8b7014b526c5f1d958390\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":683,\\\"size\\\":89329}\",\"full_url\":\"http:\\/\\/h.hiphotos.baidu.com\\/\\/lvpics\\/w%3D300\\/sign=553cd24f0924ab18e016e73705fbe69a\\/b9d8b7014b526c5f1d958390.jpg\"},\"abs_desc\":\"\",\"level\":\"3\"},{\"sid\":\"5007715ac511463263cfd1f3\",\"surl\":\"zhongguo\",\"sname\":\"\\u4e2d\\u56fd\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"1bac7536b8e8ed52f2cad25c\",\"view_count\":\"72931\",\"cid\":\"27\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"1\",\"vid\":\"15a9f4262a8d0b0ef2db6d3f\",\"ext\":{\"sid\":\"5007715ac511463263cfd1f3\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"255\",\"map_x\":\"12958421.864946\",\"map_y\":\"4826697.019291\",\"map_info\":\"116.39985,39.914004\",\"going_count\":\"139\",\"gone_count\":\"133\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"China\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"\\u5386\\u53f2\\u60a0\\u4e45\\u7684\\u56fd\\u5ea6\\uff0c\\u8fc8\\u7740\\u73b0\\u4ee3\\u5316\\u7684\\u6b65\\u4f10\\u524d\\u8fdb\\u3002\\u8fd9\\u91cc\\u6709\\u4f18\\u7f8e\\u7684\\u81ea\\u7136\\u98ce\\u5149\\u548c\\u4eba\\u6587\\u666f\\u89c2\\uff0c\\u6709\\u5404\\u8272\\u7f8e\\u98df\\uff0c\\u8fd8\\u6709\\u70ed\\u60c5\\u597d\\u5ba2\\u7684\\u4eba\\u6c11\\u3002\\n\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"35e940df5a84794b495403ab\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":683,\\\"size\\\":140998,\\\"upload_uid\\\":\\\"628388277\\\",\\\"upload_uname\\\":\\\"\\\\u7f8e\\\\u56fd\\\\u5e0c\\\\u814a\\\\u52a0\\\\u62ff\\\\u5927\\\"}\",\"full_url\":\"http:\\/\\/h.hiphotos.baidu.com\\/\\/lvpics\\/w%3D300\\/sign=edc688dfe950352ab16123086343fb1a\\/35e940df5a84794b495403ab.jpg\"},\"abs_desc\":\"\\u5386\\u53f2\\u60a0\\u4e45\\u7684\\u56fd\\u5ea6\\uff0c\\u8fc8\\u7740\\u73b0\\u4ee3\\u5316\\u7684\\u6b65\\u4f10\\u524d\\u8fdb\\u3002\\u8fd9\\u91cc\\u6709\\u4f18\\u7f8e\\u7684\\u81ea\\u7136\\u98ce\\u5149\\u548c\\u4eba\\u6587\\u666f\\u89c2\\uff0c\\u6709\\u5404\\u8272\\u7f8e\\u98df\\uff0c\\u8fd8\\u6709\\u70ed\\u60c5\\u597d\\u5ba2\\u7684\\u4eba\\u6c11\\u3002\\n\",\"level\":\"5\"},{\"sid\":\"e4cd7454b0656bc57594befb\",\"surl\":\"malaixiya\",\"sname\":\"\\u9a6c\\u6765\\u897f\\u4e9a\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"610864\",\"cid\":\"0\",\"star\":\"5\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"20ade45fc111fb083b194e7e\",\"ext\":{\"sid\":\"e4cd7454b0656bc57594befb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"873\",\"map_x\":\"11320625.8088\",\"map_y\":\"349798.58817292\",\"map_info\":\"101.687279,3.156285\",\"going_count\":\"586\",\"gone_count\":\"266\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\\u5927\\u9a6c\",\"en_sname\":\"Malaysia\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"3\",\"abs_desc\":\"\\u4e1c\\u5357\\u4e9a\\u627c\\u5b88\\u9a6c\\u516d\\u7532\\u6d77\\u5ce1\\u7684\\u82b1\\u56ed\\u56fd\\u5ea6\\uff0c\\u7eaf\\u51c0\\u7684\\u6d77\\u6ee9\\u3001\\u5947\\u7279\\u7684\\u6d77\\u5c9b\\u3001\\u539f\\u59cb\\u7684\\u96e8\\u6797\\u4ee5\\u53ca\\u73b0\\u4ee3\\u5316\\u7684\\u90fd\\u5e02\\u7ec4\\u5408\\u6210\\u4e86\\u9a6c\\u6765\\u6587\\u5316\\u7684\\u53d1\\u6e90\\u5730\\u3002\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"c2bce2032f572ddfd43f7ccf\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":768,\\\"size\\\":255661}\",\"full_url\":\"http:\\/\\/f.hiphotos.baidu.com\\/\\/lvpics\\/w%3D300\\/sign=cbd45cb8ce1b9d168ac79c61c3deb4eb\\/c2bce2032f572ddfd43f7ccf.jpg\"},\"abs_desc\":\"\\u4e1c\\u5357\\u4e9a\\u627c\\u5b88\\u9a6c\\u516d\\u7532\\u6d77\\u5ce1\\u7684\\u82b1\\u56ed\\u56fd\\u5ea6\\uff0c\\u7eaf\\u51c0\\u7684\\u6d77\\u6ee9\\u3001\\u5947\\u7279\\u7684\\u6d77\\u5c9b\\u3001\\u539f\\u59cb\\u7684\\u96e8\\u6797\\u4ee5\\u53ca\\u73b0\\u4ee3\\u5316\\u7684\\u90fd\\u5e02\\u7ec4\\u5408\\u6210\\u4e86\\u9a6c\\u6765\\u6587\\u5316\\u7684\\u53d1\\u6e90\\u5730\\u3002\",\"level\":\"5\"},{\"sid\":\"24e6eb69e222608cbb0ea3fb\",\"surl\":\"chaoxian\",\"sname\":\"\\u671d\\u9c9c\",\"parent_sid\":\"c921e59aba1c706693d2d7f3\",\"uid\":\"408a5cb136de73f660ea480f\",\"view_count\":\"157388\",\"cid\":\"1\",\"star\":\"4\",\"scene_layer\":\"2\",\"is_china\":\"0\",\"vid\":\"abfdd3c8b66dad344e8b5141\",\"ext\":{\"sid\":\"24e6eb69e222608cbb0ea3fb\",\"scene_layer\":\"2\",\"fmap_x\":\"0\",\"fmap_y\":\"0\",\"visit_count\":\"328\",\"map_x\":\"14008124.573061\",\"map_y\":\"4693506.8209159\",\"map_info\":\"125.829163,38.987168\",\"going_count\":\"232\",\"gone_count\":\"86\",\"md5\":\"\",\"ipad_package_md5\":\"\",\"poid\":\"0\",\"tpl_id\":\"1\",\"version_id\":\"1\",\"alias\":\"\",\"en_sname\":\"North Korea\",\"address\":\" \",\"phone\":\"\",\"level\":\"\",\"website\":\"\",\"visa_level\":\"0\",\"abs_desc\":\"\\u5bf9\\u4e8e\\u5916\\u754c\\u6765\\u8bf4\\u8fd9\\u662f\\u4e00\\u4e2a\\u6709\\u4e9b\\u795e\\u79d8\\u7684\\u5730\\u65b9\\uff0c\\u800c\\u751f\\u6d3b\\u5728\\u8fd9\\u91cc\\u7684\\u4eba\\u4eec\\uff0c\\u4e0d\\u8fc7\\u662f\\u5728\\u5c06\\u519b\\u7684\\u6000\\u62b1\\u4e2d\\u5e78\\u798f\\u7684\\u6d3b\\u7740\\u2014\\u2014\\u5e26\\u7740\\u5168\\u6c11\\u65cf\\u7684\\u4fe1\\u4ef0\\u201c\\u72c2\\u8a00\\u201d\\u7406\\u60f3\\u3002\",\"sketch_desc\":\"\",\"more_desc\":\"\",\"self_notes\":\"0\"},\"cover\":{\"pic_url\":\"808a27db7f13af31d1164ee3\",\"ext\":\"{\\\"width\\\":1024,\\\"height\\\":768,\\\"size\\\":101024}\",\"full_url\":\"http:\\/\\/b.hiphotos.baidu.com\\/\\/lvpics\\/w%3D300\\/sign=50cb41665c6034a829e2be81fb1249d9\\/808a27db7f13af31d1164ee3.jpg\"},\"abs_desc\":\"\\u5bf9\\u4e8e\\u5916\\u754c\\u6765\\u8bf4\\u8fd9\\u662f\\u4e00\\u4e2a\\u6709\\u4e9b\\u795e\\u79d8\\u7684\\u5730\\u65b9\\uff0c\\u800c\\u751f\\u6d3b\\u5728\\u8fd9\\u91cc\\u7684\\u4eba\\u4eec\\uff0c\\u4e0d\\u8fc7\\u662f\\u5728\\u5c06\\u519b\\u7684\\u6000\\u62b1\\u4e2d\\u5e78\\u798f\\u7684\\u6d3b\\u7740\\u2014\\u2014\\u5e26\\u7740\\u5168\\u6c11\\u65cf\\u7684\\u4fe1\\u4ef0\\u201c\\u72c2\\u8a00\\u201d\\u7406\\u60f3\\u3002\",\"level\":\"4\"}]}}}','method'=>'GET'),
    array('aid'=>119,'url'=>'/plan/ajax/createtrip','module_name'=>'plan','description'=>'【异步】添加景点到计划','params'=>'{
    \"pl_id\": \"8f069015d1d002e1397dbaca\",
    \"pl_id#\": \"计划的id\",
    \"plan_collect_id\":\"5bb73bd50bb10dbbd3869874\",
    \"plan_collect_id#\": \"收集池的id\",
    \"plan_days_id\":\"9cab4167655077c11bfb477c\",
    \"plan_days_id#\":\"添加计划当前天的id\",
    \"xid\":\"b92e706693d2d06f5707d5c1\",
    \"xid#\":\"添加景点的sid\",
    \"parent_sid\":\"b92e706693d2d06f5707d5c1\",
    \"parent_sid#\":\"父景点的sid\",
    \"type\":\"1\",
    \"type#\":\"添加的类型，景点为1，酒店为3，餐馆为2，小贴士为4\",
    \"position\":\"6\",
    \"position#\": \"添加景点的位置\",
    \"traffic\":\"3\",
    \"traffic#\": \"添加景点的交通方式\",
    \"bdstoken\":\"32c9aa94163e7cab39cc634c9bd929d1\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"plan_info\": {
            \"result\": \"succ\",
            \"pl_id\": \"82bc972b3d25628d1defd0cc\",
            \"plan_days_id\": \"7a4a1c4a30a4e82a9c0fd879\",
            \"position\": 2,
            \"plan_collect_detail_id\": \"ca71d45eeb0a5e08cad26a0c\",
            \"traffic\": 3,
            \"remark\": \"\",
            \"plan_trips_id\": \"9a1ffa3129134ff18c12a3dd\",
            \"plan_collect_id\": \"a845c589aa501610267b5048\",
            \"type\": 1,
            \"xid\": \"28942b074d001b3184b27efe\",
            \"parent_sid\": \"28942b074d001b3184b27efe\",
            \"content\": \"{\\\"url\\\":\\\"waitan\\\",\\\"name\\\":\\\"\\\\u5916\\\\u6ee9\\\",\\\"scene_layer\\\":\\\"6\\\",\\\"map_y\\\":\\\"31.241772\\\",\\\"map_x\\\":\\\"121.496713\\\",\\\"is_china\\\":1,\\\"address\\\":\\\" \\\\u4e0a\\\\u6d77\\\\u5e02\\\\u4e2d\\\\u5c71\\\\u4e1c\\\\u4e00\\\\u8def5\\\\u5f04\\\",\\\"phone\\\":\\\"\\\",\\\"travel_time\\\":\\\"1\\\\u5c0f\\\\u65f6\\\",\\\"price\\\":\\\"\\\\u514d\\\\u8d39\\\",\\\"opening_hours\\\":\\\"\\\\u5168\\\\u5929\\\",\\\"is_unmissable\\\":0,\\\"attention\\\":[\\\"\\\\u6e38\\\\u89c8\\\\u5efa\\\\u8bae\\\"],\\\"traffic_info\\\":{\\\"local\\\":[],\\\"remote\\\":[\\\"\\\\u516c\\\\u4ea4\\\",\\\"\\\\u5730\\\\u94c1\\\"]},\\\"has_son\\\":1,\\\"pic_url\\\":\\\"964b2e4e92017e92d1c86adc\\\",\\\"pic_height\\\":683,\\\"pic_width\\\":1024}\",
            \"is_deleted\": 1
        }
    }
}','method'=>'POST'),
    array('aid'=>120,'url'=>'/plan/ajax/plandays/create','module_name'=>'plan','description'=>'【异步】计划添加新的天数','params'=>'{
    \"pl_id\":\"edbf60e09173a9dd3a284dff\",
    \"pl_id#\": \"计划的id\",
    \"day\":2,
    \"day#\": \"添加第几天\",
    \"bdstoken\":\"97bb8c79aed7f6899ea5040a00fd451b\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"plan_info\": {
            \"result\": \"succ\",
            \"plan_days_id\": \"3b5ae624a1cad9bfa5899492\",
            \"plan\": {
                \"pl_id\": \"edbf60e09173a9dd3a284dff\",
                \"day\": 2
            }
        }
    }
}
','method'=>'POST'),
    array('aid'=>121,'url'=>'/plan/ajax/collectdetail/create','module_name'=>'plan','description'=>'【异步】添加景点或者小贴士到收集','params'=>'{
    \"plan_collect_id\":\"5bb73bd50bb10dbbd3869874\",
    \"plan_collcect_id#\": \"收集池的id\",
    \"xid\":\"68c27ae3b9d414ff762fddfe\",
    \"xid#\":\"景点的sid\",
    \"type\":1,
    \"type#\": \"添加景点的类型，1为景点，2为餐馆，3为酒店，4为小贴士\",
    \"parent_sid\":\"68c27ae3b9d414ff762fddfe\",
    \"parent_sid#\": \"父景点的sid\",
    \"bdstoken\":\"32c9aa94163e7cab39cc634c9bd929d1\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"plan_info\": [
            {
                \"result\": \"succ\",
                \"plan_collect_id\": \"d15a69f5925ffaf4e0951a96\",
                \"type\": 1,
                \"xid\": \"289d2b074d001b3184b27ef7\",
                \"parent_sid\": \"289d2b074d001b3184b27ef7\",
                \"content\": \"{\\\"url\\\":\\\"shanghai\\\",\\\"name\\\":\\\"\\\\u4e0a\\\\u6d77\\\",\\\"scene_layer\\\":\\\"4\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"31.2378\\\",\\\"map_x\\\":\\\"121.474101\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"opening_hours\\\":\\\"\\\",\\\"phone\\\":\\\"\\\",\\\"price\\\":\\\"\\\",\\\"address\\\":\\\"\\\",\\\"attention\\\":[\\\"\\\\u6700\\\\u4f73\\\\u65c5\\\\u6e38\\\\u65f6\\\\u95f4\\\",\\\"\\\\u751f\\\\u6d3b\\\\u670d\\\\u52a1\\\",\\\"\\\\u7d27\\\\u6025\\\\u7535\\\\u8bdd\\\",\\\"\\\\u90ae\\\\u653f\\\\u670d\\\\u52a1\\\",\\\"\\\\u4e0a\\\\u6d77\\\\u65c5\\\\u6e38\\\\u96c6\\\\u6563\\\\u4e2d\\\\u5fc3\\\\u4ecb\\\\u7ecd\\\\u53ca\\\\u65c5\\\\u6e38\\\\u7ebf\\\\u8def\\\"],\\\"traffic_info\\\":{\\\"local\\\":[\\\"\\\\u5730\\\\u94c1\\\",\\\"\\\\u51fa\\\\u79df\\\\u8f66\\\",\\\"\\\\u516c\\\\u4ea4\\\",\\\"\\\\u89c2\\\\u5149\\\\u8f66\\\",\\\"\\\\u79df\\\\u8f66\\\",\\\"\\\\u8f6e\\\\u8239\\\",\\\"\\\\u81ea\\\\u884c\\\\u8f66\\\"],\\\"remote\\\":[\\\"\\\\u98de\\\\u673a\\\",\\\"\\\\u706b\\\\u8f66\\\",\\\"\\\\u5ba2\\\\u8f66\\\",\\\"\\\\u81ea\\\\u9a7e\\\",\\\"\\\\u8f6e\\\\u8239\\\"]},\\\"has_son\\\":1,\\\"pic_url\\\":\\\"71cf3bc79f3df8dc2620712bcd11728b4710286f\\\",\\\"pic_height\\\":849,\\\"pic_width\\\":1280}\",
                \"plan_collect_detail_id\": \"815d96e561cff11d6b2facea\"
            }
        ]
    }
}','method'=>'POST'),
    array('aid'=>122,'url'=>'/plan/ajax/plantrips/update','module_name'=>'plan','description'=>'【异步】更新交通方式或者更新备注','params'=>'{
    \"plan_trips_id\":\"9a1ffa3129134ff18c12a3dd\",
    \"plan_trips_id#\":\"计划中景点的id\",
    \"plan_days_id\":\"7a4a1c4a30a4e82a9c0fd879\",
    \"plan_days_id#\":\"\",
    \"traffic\":3,
    \"traffic_dist\":\"6.1公里\",
    \"traffic_time\":\"40分钟\",
    \"remark\":\"jlll\",
    \"remark#\":\"备注，如果有备注时，就没有traffic的信息\",
    \"bdstoken\":\"32c9aa94163e7cab39cc634c9bd929d1\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"plan_collect_detail_id\": \"9f22c4247b1b40c0161b8d6d\",
        \"plan_trips_id\": \"3b2697a4b9f7260a4e7fb8bc\",
        \"plan_info\": [
                    {
                    \"result\": \"succ\",
                    \"plan_collect_id\": \"f33924bc7081c131ba111e8f\",
                    \"type\": 1,
                    \"parent_sid\": \"3b1329d6be78733fb2cc20f7\",
                    \"xid\": \"3b1329d6be78733fb2cc20f7\",
                    \"content\": \"{\\\"url\\\":\\\"wuhan\\\",\\\"name\\\":\\\"\\\\u6b66\\\\u6c49\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"30.605953\\\",\\\"map_x\\\":\\\"114.293778\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"\\\",\\\"pic_height\\\":\\\"\\\",\\\"pic_width\\\":\\\"\\\"}\",
                    \"plan_collect_detail_id\": \"efb6b0e60e5ea2ac09f2026c\"
                    },
                    {
                    \"result\": \"succ\",
                    \"plan_collect_id\": \"f33924bc7081c131ba111e8f\",
                    \"type\": 1,
                    \"parent_sid\": \"289d2b074d001b3184b27ef7\",
                    \"xid\": \"289d2b074d001b3184b27ef7\",
                    \"content\": \"{\\\"url\\\":\\\"shanghai\\\",\\\"name\\\":\\\"\\\\u4e0a\\\\u6d77\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"31.2378\\\",\\\"map_x\\\":\\\"121.474101\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"500fd9f9d72a6059290390a92834349b033bba75\\\",\\\"pic_height\\\":800,\\\"pic_width\\\":1200}\",
                    \"plan_collect_detail_id\": \"40a4015ea2ac09f2e7fa016c\"
                    }
                    ],
                    \"trip_list\": [
                    {
                    \"result\": \"succ\",
                    \"pl_id\": \"351ffc9721cfb55a1126b289\",
                    \"plan_days_id\": \"bc0700e65223a104eceb4418\",
                    \"position\": 3,
                    \"plan_collect_detail_id\": \"efb6b0e60e5ea2ac09f2026c\",
                    \"traffic\": 0,
                    \"remark\": \"\",
                    \"xid\": \"3b1329d6be78733fb2cc20f7\",
                    \"detail_content\": \"{\\\"url\\\":\\\"wuhan\\\",\\\"name\\\":\\\"\\\\u6b66\\\\u6c49\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"30.605953\\\",\\\"map_x\\\":\\\"114.293778\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"\\\",\\\"pic_height\\\":\\\"\\\",\\\"pic_width\\\":\\\"\\\"}\",
                    \"plan_trips_id\": \"6d07b502101703f0bbe5edbc\"
                    },
                    {
                    \"result\": \"succ\",
                    \"pl_id\": \"351ffc9721cfb55a1126b289\",
                    \"plan_days_id\": \"bc0700e65223a104eceb4418\",
                    \"position\": 4,
                    \"plan_collect_detail_id\": \"40a4015ea2ac09f2e7fa016c\",
                    \"traffic\": 0,
                    \"remark\": \"\",
                    \"xid\": \"289d2b074d001b3184b27ef7\",
                    \"detail_content\": \"{\\\"url\\\":\\\"shanghai\\\",\\\"name\\\":\\\"\\\\u4e0a\\\\u6d77\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"31.2378\\\",\\\"map_x\\\":\\\"121.474101\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"500fd9f9d72a6059290390a92834349b033bba75\\\",\\\"pic_height\\\":800,\\\"pic_width\\\":1200}\",
                    \"plan_trips_id\": \"fe02101703f0bbe5d5f8ecbc\"
                    }
                    ]
    }
}','method'=>'POST'),
    array('aid'=>123,'url'=>'/plan/ajax/plantrips/delete','module_name'=>'plan','description'=>'【异步】删除计划中的景点或者收集中的景点','params'=>'{
    \"plan_trips_id\":\"9a1ffa3129134ff18c12a3dd\",
    \"plan_trips_id#\": \"计划中景点的id\",
    \"plan_collect_detail_id\":\"58b9db1d47762633679d3a87\",
    \"plan_collect_detail_id#\":\"收集中景点的id\",
    \"is_deleted\":1,
    \"is_deleted#\": \"考虑到通用性，可能会有其他使用方式，现在暂时该参数写死为1\",
    \"bdstoken\":\"32c9aa94163e7cab39cc634c9bd929d1\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"plan_collect_detail_id\": \"9f22c4247b1b40c0161b8d6d\",
        \"plan_trips_id\": \"3b2697a4b9f7260a4e7fb8bc\",
        \"plan_info\": [
                    {
                    \"result\": \"succ\",
                    \"plan_collect_id\": \"f33924bc7081c131ba111e8f\",
                    \"type\": 1,
                    \"parent_sid\": \"3b1329d6be78733fb2cc20f7\",
                    \"xid\": \"3b1329d6be78733fb2cc20f7\",
                    \"content\": \"{\\\"url\\\":\\\"wuhan\\\",\\\"name\\\":\\\"\\\\u6b66\\\\u6c49\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"30.605953\\\",\\\"map_x\\\":\\\"114.293778\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"\\\",\\\"pic_height\\\":\\\"\\\",\\\"pic_width\\\":\\\"\\\"}\",
                    \"plan_collect_detail_id\": \"efb6b0e60e5ea2ac09f2026c\"
                    },
                    {
                    \"result\": \"succ\",
                    \"plan_collect_id\": \"f33924bc7081c131ba111e8f\",
                    \"type\": 1,
                    \"parent_sid\": \"289d2b074d001b3184b27ef7\",
                    \"xid\": \"289d2b074d001b3184b27ef7\",
                    \"content\": \"{\\\"url\\\":\\\"shanghai\\\",\\\"name\\\":\\\"\\\\u4e0a\\\\u6d77\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"31.2378\\\",\\\"map_x\\\":\\\"121.474101\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"500fd9f9d72a6059290390a92834349b033bba75\\\",\\\"pic_height\\\":800,\\\"pic_width\\\":1200}\",
                    \"plan_collect_detail_id\": \"40a4015ea2ac09f2e7fa016c\"
                    }
                    ],
                    \"trip_list\": [
                    {
                    \"result\": \"succ\",
                    \"pl_id\": \"351ffc9721cfb55a1126b289\",
                    \"plan_days_id\": \"bc0700e65223a104eceb4418\",
                    \"position\": 3,
                    \"plan_collect_detail_id\": \"efb6b0e60e5ea2ac09f2026c\",
                    \"traffic\": 0,
                    \"remark\": \"\",
                    \"xid\": \"3b1329d6be78733fb2cc20f7\",
                    \"detail_content\": \"{\\\"url\\\":\\\"wuhan\\\",\\\"name\\\":\\\"\\\\u6b66\\\\u6c49\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"30.605953\\\",\\\"map_x\\\":\\\"114.293778\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"\\\",\\\"pic_height\\\":\\\"\\\",\\\"pic_width\\\":\\\"\\\"}\",
                    \"plan_trips_id\": \"6d07b502101703f0bbe5edbc\"
                    },
                    {
                    \"result\": \"succ\",
                    \"pl_id\": \"351ffc9721cfb55a1126b289\",
                    \"plan_days_id\": \"bc0700e65223a104eceb4418\",
                    \"position\": 4,
                    \"plan_collect_detail_id\": \"40a4015ea2ac09f2e7fa016c\",
                    \"traffic\": 0,
                    \"remark\": \"\",
                    \"xid\": \"289d2b074d001b3184b27ef7\",
                    \"detail_content\": \"{\\\"url\\\":\\\"shanghai\\\",\\\"name\\\":\\\"\\\\u4e0a\\\\u6d77\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"31.2378\\\",\\\"map_x\\\":\\\"121.474101\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"500fd9f9d72a6059290390a92834349b033bba75\\\",\\\"pic_height\\\":800,\\\"pic_width\\\":1200}\",
                    \"plan_trips_id\": \"fe02101703f0bbe5d5f8ecbc\"
                    }
                    ]
    }
}{}','method'=>'POST'),
    array('aid'=>124,'url'=>'/plan/ajax/plan/update','module_name'=>'plan','description'=>'【异步】更新计划的名字或者时间','params'=>'{
    \"pl_id\":\"8f069015d1d002e1397dbaca\",
    \"pl_id#\":\"计划的id\",
    \"title\": \"我的北京游\",
    \"title#\": \"计划的名字\",
    \"start_time\":\"1381334400\",
    \"start_time#\":\"计划的时间\",
    \"bdstoken\":\"32c9aa94163e7cab39cc634c9bd929d1\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"plan_collect_detail_id\": \"9f22c4247b1b40c0161b8d6d\",
        \"plan_trips_id\": \"3b2697a4b9f7260a4e7fb8bc\",
        \"plan_info\": [
                    {
                    \"result\": \"succ\",
                    \"plan_collect_id\": \"f33924bc7081c131ba111e8f\",
                    \"type\": 1,
                    \"parent_sid\": \"3b1329d6be78733fb2cc20f7\",
                    \"xid\": \"3b1329d6be78733fb2cc20f7\",
                    \"content\": \"{\\\"url\\\":\\\"wuhan\\\",\\\"name\\\":\\\"\\\\u6b66\\\\u6c49\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"30.605953\\\",\\\"map_x\\\":\\\"114.293778\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"\\\",\\\"pic_height\\\":\\\"\\\",\\\"pic_width\\\":\\\"\\\"}\",
                    \"plan_collect_detail_id\": \"efb6b0e60e5ea2ac09f2026c\"
                    },
                    {
                    \"result\": \"succ\",
                    \"plan_collect_id\": \"f33924bc7081c131ba111e8f\",
                    \"type\": 1,
                    \"parent_sid\": \"289d2b074d001b3184b27ef7\",
                    \"xid\": \"289d2b074d001b3184b27ef7\",
                    \"content\": \"{\\\"url\\\":\\\"shanghai\\\",\\\"name\\\":\\\"\\\\u4e0a\\\\u6d77\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"31.2378\\\",\\\"map_x\\\":\\\"121.474101\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"500fd9f9d72a6059290390a92834349b033bba75\\\",\\\"pic_height\\\":800,\\\"pic_width\\\":1200}\",
                    \"plan_collect_detail_id\": \"40a4015ea2ac09f2e7fa016c\"
                    }
                    ],
                    \"trip_list\": [
                    {
                    \"result\": \"succ\",
                    \"pl_id\": \"351ffc9721cfb55a1126b289\",
                    \"plan_days_id\": \"bc0700e65223a104eceb4418\",
                    \"position\": 3,
                    \"plan_collect_detail_id\": \"efb6b0e60e5ea2ac09f2026c\",
                    \"traffic\": 0,
                    \"remark\": \"\",
                    \"xid\": \"3b1329d6be78733fb2cc20f7\",
                    \"detail_content\": \"{\\\"url\\\":\\\"wuhan\\\",\\\"name\\\":\\\"\\\\u6b66\\\\u6c49\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"30.605953\\\",\\\"map_x\\\":\\\"114.293778\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"\\\",\\\"pic_height\\\":\\\"\\\",\\\"pic_width\\\":\\\"\\\"}\",
                    \"plan_trips_id\": \"6d07b502101703f0bbe5edbc\"
                    },
                    {
                    \"result\": \"succ\",
                    \"pl_id\": \"351ffc9721cfb55a1126b289\",
                    \"plan_days_id\": \"bc0700e65223a104eceb4418\",
                    \"position\": 4,
                    \"plan_collect_detail_id\": \"40a4015ea2ac09f2e7fa016c\",
                    \"traffic\": 0,
                    \"remark\": \"\",
                    \"xid\": \"289d2b074d001b3184b27ef7\",
                    \"detail_content\": \"{\\\"url\\\":\\\"shanghai\\\",\\\"name\\\":\\\"\\\\u4e0a\\\\u6d77\\\",\\\"is_unmissable\\\":1,\\\"map_y\\\":\\\"31.2378\\\",\\\"map_x\\\":\\\"121.474101\\\",\\\"is_china\\\":1,\\\"travel_time\\\":\\\"3\\\\u5929\\\",\\\"has_son\\\":1,\\\"pic_url\\\":\\\"500fd9f9d72a6059290390a92834349b033bba75\\\",\\\"pic_height\\\":800,\\\"pic_width\\\":1200}\",
                    \"plan_trips_id\": \"fe02101703f0bbe5d5f8ecbc\"
                    }
                    ]
    }
}','method'=>'POST'),
    array('aid'=>125,'url'=>'/plan/ajax/collectdetail/delete','module_name'=>'plan','description'=>'【异步】删除收集中的景点或者小贴士','params'=>'{\"plan_collect_detail_id\":\"006b38faa4f1a36a2e41e796\",\"plan_collect_detail_id#\":\"收集池中计划的id\",\"is_deleted\":1,\"bdstoken\":\"97bb8c79aed7f6899ea5040a00fd451b\"}','response'=>'{\"errno\":0,\"msg\":\"\",\"data\":{\"plan_info\":{\"result\":\"succ\",\"plan\":{\"plan_collect_detail_id\":\"006b38faa4f1a36a2e41e796\",\"is_deleted\":1}}}}','method'=>'POST'),
    array('aid'=>126,'url'=>'/plan/ajax/plan/updatestatus','module_name'=>'plan','description'=>'【异步】更新计划的状态','params'=>'{
    \"pl_id\":\"8f069015d1d002e1397dbaca\",
    \"pl_id#\":\"计划的id\",
    \"status\":1,
    \"status#\":\"计划的状态\",
    \"bdstoken\":\"32c9aa94163e7cab39cc634c9bd929d1\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {}
}','method'=>'POST'),
    array('aid'=>127,'url'=>'/plan/ajax/plantrips/batchupdate','module_name'=>'plan','description'=>'【异步】更新计划中的景点顺序','params'=>'{
    \"json[]\":{\"plan_trips_id\":\"3dac9bd318725fc87e23afab\",\"position\":0},
    \"json[]#\":\"要更改天的所有景点的位置，以数组的形式\",
    \"bdstoken\":\"32c9aa94163e7cab39cc634c9bd929d1\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"plan_info\": {
            \"result\": \"succ\"
        }
    }
}','method'=>'POST'),
    array('aid'=>128,'url'=>'/plan/ajax/plantrips/changetripday','module_name'=>'plan','description'=>'【异步】改变计划中景点所在的天数','params'=>'{
    \"plan_trips_id\":\"3dac9bd318725fc87e23afab\",
    \"plan_trips_id#\":\"计划中景点的id\",
    \"plan_days_id\":\"9fc751030e2ce596f1ccafd9\",
    \"plan_days_id#\":\"景点加入计划的天的id\",
    \"position\":3,
    \"position#\": \"加入到计划的天的位置\",
    \"bdstoken\":\"32c9aa94163e7cab39cc634c9bd929d1\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"plan_info\": {
            \"result\": \"succ\",
            \"plan_trips_id\": \"4a85df323a3675e4000f8e4e\",
            \"pl_id\": \"edbf60e09173a9dd3a284dff\",
            \"plan_days_id\": \"2d5bd02ca34c50d87c9ccc87\",
            \"position\": 8,
            \"plan_collect_detail_id\": \"f89684f1a36a2e4128751897\",
            \"traffic\": 2,
            \"remark\": \"\"
        }
    }
}','method'=>'POST'),
    array('aid'=>129,'url'=>'/destination/ajax/getPhotos','module_name'=>'destination','description'=>'【异步】大图页获取图片列表','params'=>'{\"format\":\"callback\",\"aid\":\"fbc7bbe1043b2d66a4d8fb77\",\"pn\":0,\"rn\":30,\"callback\":\"bd__cbs__t37v2t\"}','response'=>'{\"errno\":0,\"msg\":\"\",\"data\":{\"list\":[{\"desc\":\"中银大厦夜景\",\"ext\":{\"width\":900,\"height\":675,\"size\":341848,\"file_name\":\"照片 088.jpg\",\"from_type\":\"1画册 2用户上传 3中关村在线\",\"from_id\":\"来源画册id\",\"from_puid\":\"5255c12111fbd35492e231d0\",\"from\":\"香港的各种美：圣诞夜色与海洋公园 //来源画册名\",\"sid\":\"1837ac2d3cbf3757b4f009d3\",\"from_uid\":\"来源用户id\",\"from_uname\":\"来源用户名\",\"sname\":\"海洋公园\",\"from_zol_url\":\"来源中关村在线原贴地址\",\"from_zol_picurl\":\"来自中关村在线图片地址\"},\"pic_id\":\"4ad1918146383d17347780c0\",\"pic_url\":\"a5c27d1ed21b0ef486849a8bddc451da80cb3ef2\",\"is_cover\":\"0\",\"create_time\":\"1355986277 //创建时间的时间戳\"}],\"total\":59}}','method'=>'GET'),
    array('aid'=>130,'url'=>'/destination/ajax/photo/catchzolpic','module_name'=>'destination','description'=>'【异步】抓取合作方图片','params'=>'{
    \"sid\":\"\",
    \"aid\":\"\",
    \"picurl[]\":\"上传图片地址数组\",
    \"bdstoken\": 0
    }','response'=>'{
  \"errno\": 0,
  \"msg\": \"\",
  \"data\": {
      \"success\":3,
      \"fail\":1
  }
  
  }
','method'=>'POST'),
    array('aid'=>131,'url'=>'/plan/ajax/plan/updateuser','module_name'=>'plan','description'=>'【异步】新建计划创建关联关系','params'=>'{
    \"pl_id\": \"8f069015d1d002e1397dbaca\",
    \"pl_id#\": \"计划的id\",
    \"bdstoken\": \"32c9aa94163e7cab39cc634c9bd929d1\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {}
}','method'=>'POST'),
    array('aid'=>132,'url'=>'/mis/main/getsug','module_name'=>'mis','description'=>'游记sug反馈问题-待解决','params'=>'{
    \"pn\": 0,
    \"rn\": 10
}','response'=>'{
    \"msg\":\"\",
    \"errno\":0,
    \"user\":{
      \"username\":\"wing_0107_x\",
      \"uname\":\"wing_0107_x\",
      \"uid\":\"f80a5c064108634702131f7a\",
      \"nickname\":\"wing_0107_x\",
      \"avatar_large\":\"38a377696e675f303130375f783406\",
      \"avatar_middle\":\"38a377696e675f303130375f783406\",
      \"avatar_small\":\"38a377696e675f303130375f783406\",
      \"self_introduction\":null,
      \"location_sid\":\"0\",
      \"location\":null,
      \"preferences\":[],
      \"is_blocked\":0,
      \"user_level\":\"0\",
      \"owner_level\":\"1\",
      \"admin_level\":\"2\",
      \"is_audited\":1,
      \"trust_level\":\"0\",
      \"avatar_source\":\"1\",
      \"pic_travel_count\":0,
      \"is_admin\":1,
      \"is_owner\":1,
      \"is_daren\":0,
      \"is_famous\":0,
      \"is_reply_trust\":0,
      \"has_login_record\":1,
      \"app_has_login_record\":0,
      \"reply_day_count\":\"0\",
      \"is_activated\":1,
      \"has_uname\":1,
      \"is_bindemail\":1,
      \"usersource\":0,
      \"is_bundle\":0,
      \"login_src\":0,
      \"bdstoken\":\"60e2b2e1c7076bb57c26185004256f70\",
      \"is_login\":1
    },
    \"sug_count\":\"4\",
    \"sug_list\":[
      {
        \"id\":\"1072\",
        \"uid\":\"f80a5c064108634702131f7a\",
        \"uname\":\"wing_0107_x\",
        \"content\":\"\\\"亲爱的wing_0107_x：\\
\\\\n我们已收到您的反馈，如问题依然存在，请加QQ（2439781398）说明详情，我们将火速跟进！\\\\n\\\\n对您造成的不便我们深表歉意，感谢您对百度旅游的支持。:)\\\\n\\\\n百度旅游团队 敬上\\\"\",
        \"contact\":\"zhangyongming@baidu.com\",
        \"type\":\"0\",
        \"reply\":null,
        \"create_time\":\"1383894585\",
        \"reply_time\":\"1383895948\",
        \"is_deleted\":\"n\",
        \"status\":\"1\"
      },
      {
        \"id\":\"1071\",
        \"uid\":\"f80a5c064108634702131f7a\",
        \"uname\":\"wing_0107_x\",
        \"content\":\"我是张永明，别封我的号！！！！！！！——浏览器信息:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36(——游记的id为：)3a16dd8513ff2d63acd47454\",
        \"contact\":\"\",
        \"type\":\"0\",
        \"reply\":\"\\\"亲爱的wing_0107_x：\\
\\\\n我们已收到您的反馈，如问题依然存在，请加QQ（2439781398）说明详情，我们将火速跟进！\\\\n\\\\n对您造成的不便我们深表歉意，感谢您对百度旅游的支持。:)\\\\n\\\\n百度旅游团队 敬上\\\"\",
        \"create_time\":\"1383894466\",
        \"reply_time\":\"1383896215\",
        \"is_deleted\":\"n\",
        \"status\":\"1\"
      },
      {
        \"id\":\"1070\",
        \"uid\":\"f80a5c064108634702131f7a\",
        \"uname\":\"wing_0107_x\",
        \"content\":\"我去！我前天写的游记竟然被设精了！！！你们太有眼光了！——浏览器信息:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36(——游记的id为：)3a16dd8513ff2d63acd47454\",
        \"contact\":\"\",
        \"type\":\"0\",
        \"reply\":null,
        \"create_time\":\"1383893898\",
        \"reply_time\":\"0\",
        \"is_deleted\":\"n\",
        \"status\":\"0\"
      },
      {
        \"id\":\"1069\",
        \"uid\":\"f98e32f3cead18e5f15cfb41\",
        \"uname\":\"tengfeigti\",
        \"content\":\"bugbugbugbug!!!!!!!!!!\",
        \"contact\":\"15652997429\",
        \"type\":\"0\",
        \"reply\":null,
        \"create_time\":\"1383808333\",
        \"reply_time\":\"0\",
        \"is_deleted\":\"n\",
        \"status\":\"0\"
      }
    ],
    \"pagelist\":false,
    \"wise_model\":\"pc\",
    \"curr_idc\":\"t\"
  }','method'=>'GET'),
    array('aid'=>133,'url'=>'/mis/main/getcloasedsug','module_name'=>'mis','description'=>'游记sug反馈-已解决区','params'=>'{
    \"pn\": 0,
    \"rn\": 10
}','response'=>'{
    \"msg\":\"\",
    \"errno\":0,
    \"user\":{
      \"username\":\"wing_0107_x\",
      \"uname\":\"wing_0107_x\",
      \"uid\":\"f80a5c064108634702131f7a\",
      \"nickname\":\"wing_0107_x\",
      \"avatar_large\":\"38a377696e675f303130375f783406\",
      \"avatar_middle\":\"38a377696e675f303130375f783406\",
      \"avatar_small\":\"38a377696e675f303130375f783406\",
      \"self_introduction\":null,
      \"location_sid\":\"0\",
      \"location\":null,
      \"preferences\":[],
      \"is_blocked\":0,
      \"user_level\":\"0\",
      \"owner_level\":\"1\",
      \"admin_level\":\"2\",
      \"is_audited\":1,
      \"trust_level\":\"0\",
      \"avatar_source\":\"1\",
      \"pic_travel_count\":0,
      \"is_admin\":1,
      \"is_owner\":1,
      \"is_daren\":0,
      \"is_famous\":0,
      \"is_reply_trust\":0,
      \"has_login_record\":1,
      \"app_has_login_record\":0,
      \"reply_day_count\":\"0\",
      \"is_activated\":1,
      \"has_uname\":1,
      \"is_bindemail\":1,
      \"usersource\":0,
      \"is_bundle\":0,
      \"login_src\":0,
      \"bdstoken\":\"60e2b2e1c7076bb57c26185004256f70\",
      \"is_login\":1
    },
    \"sug_count\":\"4\",
    \"sug_list\":[
      {
        \"id\":\"1072\",
        \"uid\":\"f80a5c064108634702131f7a\",
        \"uname\":\"wing_0107_x\",
        \"content\":\"\\\"亲爱的wing_0107_x：\\
\\\\n我们已收到您的反馈，如问题依然存在，请加QQ（2439781398）说明详情，我们将火速跟进！\\\\n\\\\n对您造成的不便我们深表歉意，感谢您对百度旅游的支持。:)\\\\n\\\\n百度旅游团队 敬上\\\"\",
        \"contact\":\"zhangyongming@baidu.com\",
        \"type\":\"0\",
        \"reply\":\"\\\"ok 没问题\\\"\",
        \"create_time\":\"1383894585\",
        \"reply_time\":\"1383896566\",
        \"is_deleted\":\"n\",
        \"status\":\"1\"
      },
      {
        \"id\":\"1071\",
        \"uid\":\"f80a5c064108634702131f7a\",
        \"uname\":\"wing_0107_x\",
        \"content\":\"我是张永明，别封我的号！！！！！！！——浏览器信息:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36(——游记的id为：)3a16dd8513ff2d63acd47454\",
        \"contact\":\"\",
        \"type\":\"0\",
        \"reply\":\"\\\"亲爱的wing_0107_x：\\
\\\\n我们已收到您的反馈，如问题依然存在，请加QQ（2439781398）说明详情，我们将火速跟进！\\\\n\\\\n对您造成的不便我们深表歉意，感谢您对百度旅游的支持。:)\\\\n\\\\n百度旅游团队 敬上\\\"\",
        \"create_time\":\"1383894466\",
        \"reply_time\":\"1383896215\",
        \"is_deleted\":\"n\",
        \"status\":\"1\"
      },
      {
        \"id\":\"1070\",
        \"uid\":\"f80a5c064108634702131f7a\",
        \"uname\":\"wing_0107_x\",
        \"content\":\"我去！我前天写的游记竟然被设精了！！！你们太有眼光了！——浏览器信息:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36(——游记的id为：)3a16dd8513ff2d63acd47454\",
        \"contact\":\"\",
        \"type\":\"0\",
        \"reply\":null,
        \"create_time\":\"1383893898\",
        \"reply_time\":\"0\",
        \"is_deleted\":\"n\",
        \"status\":\"0\"
      },
      {
        \"id\":\"1069\",
        \"uid\":\"f98e32f3cead18e5f15cfb41\",
        \"uname\":\"tengfeigti\",
        \"content\":\"bugbugbugbug!!!!!!!!!!\",
        \"contact\":\"15652997429\",
        \"type\":\"0\",
        \"reply\":null,
        \"create_time\":\"1383808333\",
        \"reply_time\":\"0\",
        \"is_deleted\":\"n\",
        \"status\":\"0\"
      }
    ],
    \"pagelist\":false,
    \"wise_model\":\"pc\",
    \"curr_idc\":\"t\"
  }','method'=>'GET'),
    array('aid'=>134,'url'=>'/mis/main/updatesug','module_name'=>'mis','description'=>'管理员反馈或关闭sug','params'=>'{
    \"id\": \"要关闭的sug的id\",
    \"reply\": \"版主回复的内容(关闭时不用传)\",
    \"closed\": \"进行关闭操作（回复时不用传）\"
}','response'=>'{
    \"errno\": 0    
}','method'=>'POST'),
    array('aid'=>135,'url'=>'/main/sugfeedback','module_name'=>'main','description'=>'提交反馈信息到mis','params'=>'{
    \"content\": \"用户反馈的内容,小于3000字\",
    \"contact\": \"联系方式，小于255字\",
    \"type\": \"暂不使用该参数，兼容后续各种反馈信息\"
}','response'=>'{
    \"errno\": 0    
}','method'=>'POST'),
    array('aid'=>136,'url'=>'/user/ajax/remark/getsceneremarklist','module_name'=>'user','description'=>'获取点评列表','params'=>'{
    \"xid\":\"795ac511463263cf7ae3def3\",
    \"xid#\": \"点评的各种id，表示点评的不同内容，如画册,景点等id\",
    \"score\":0,
    \"score#\": \"点评的分数tab，0表示全部，1-5表示1-5分\",
    \"pn\":0,
    \"rn\":15,
    \"format\":\"ajax\",
    \"t\":1384152574239,
    \"style\":\"hot\",
    \"style#\": \"点评的类型，hot表示热门，recent表示最新\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"pn\": 0,
        \"rn\": 15,
        \"total\": \"1251\",
        \"name\": \"北京\",
        \"rating\": 4,
        \"count\": {
            \"total\": 1251,
            \"score_total\": {
                \"1\": 12,
                \"2\": 13,
                \"3\": 90,
                \"4\": 438,
                \"5\": 698
            }
        },
        \"list\": [
            {
                \"user\": {
                    \"uid\": \"2249baa27131e28cae090219\",
                    \"nickname\": \"王福京\",
                    \"avatar_source\": \"0\",
                    \"avatar_large\": \"814b07d846212f5033fa1ca2\",
                    \"avatar_middle\": \"cdfe7281781587bdbc3e1ea2\",
                    \"avatar_small\": \"9dc3cf583aa0f2e4800a18a2\"
                },
                \"from\": {
                    \"is_from_cellphone\": 0,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"de37420969d40a110728cea1\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 5,
                \"content\": \"每次听到《北京，北京》，就会有一种北漂的孤独的沧桑感~ 在这个充满浓郁历史人文气息与现代都市文化交织的都市，你可以悠闲的漫步在老北京的胡同里寻找历史的影子，也可以到三里屯和众多“老外”一起喝酒聊天，也可以在后海朦胧的夜色里寻觅光与暗交织下夜生活…… 这里就是让许多人人恨，又让众多人人爱的北京~\",
                \"comment_count\": 0,
                \"recommend_count\": 4,
                \"pics\": [
                    {
                        \"pic_url\": \"3b87e950352ac65c19a3064af9f2b21193138a60\",
                        \"ext\": {
                            \"width\": \"1200\",
                            \"height\": \"1600\"
                        }
                    },
                    {
                        \"pic_url\": \"279759ee3d6d55fb6c51161f6f224f4a20a4dd70\",
                        \"ext\": {
                            \"width\": \"1200\",
                            \"height\": \"1600\"
                        }
                    },
                    {
                        \"pic_url\": \"d01373f082025aaf3c661df2f9edab64034f1ab6\",
                        \"ext\": {
                            \"width\": \"1600\",
                            \"height\": \"1200\"
                        }
                    }
                ],
                \"create_time\": 1380504009,
                \"update_time\": 1382502233
            },
            {
                \"user\": {
                    \"uid\": \"07e3f95c71e224de71cfa330\",
                    \"nickname\": \"公主变女王\",
                    \"avatar_source\": \"0\",
                    \"avatar_large\": \"7aec54e736d12f2e20b872d14fc2d562843568c6\",
                    \"avatar_middle\": \"b90e7bec54e736d1b7ae50b99b504fc2d46269c6\",
                    \"avatar_small\": \"5243fbf2b2119313ccea230165380cd790238dd2\"
                },
                \"from\": {
                    \"is_from_cellphone\": 0,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"28f2d735b55f803a370b6924\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 4,
                \"content\": \"这里对于我来说是有这特殊意义的，因为我的国内蜜月游选在了这里。但真心对北京的空气感到无语，虽然大气的古建筑一直是我比较喜欢的。而且这里的小吃确实好吃啊。总之是让我还想再去，又怕再去的地方。\",
                \"comment_count\": 0,
                \"recommend_count\": 2,
                \"pics\": [
                    {
                        \"pic_url\": \"c8177f3e6709c93d25b25cd69d3df8dcd100544a\",
                        \"ext\": {
                            \"width\": \"1600\",
                            \"height\": \"1200\"
                        }
                    },
                    {
                        \"pic_url\": \"562c11dfa9ec8a13a29f05c1f503918fa0ecc00e\",
                        \"ext\": {
                            \"width\": \"1600\",
                            \"height\": \"1200\"
                        }
                    },
                    {
                        \"pic_url\": \"71cf3bc79f3df8dc8904d2b0cf11728b471028d1\",
                        \"ext\": {
                            \"width\": \"1600\",
                            \"height\": \"1200\"
                        }
                    }
                ],
                \"create_time\": 1381462968,
                \"update_time\": 1382092454
            },
            {
                \"user\": {
                    \"uid\": \"997303fd3d026f5e71e2bda9\",
                    \"nickname\": \"joyice伊伊\",
                    \"avatar_source\": \"0\",
                    \"avatar_large\": \"fd039245d688d43fac9206d77f1ed21b0ef43bdf\",
                    \"avatar_middle\": \"fd039245d688d43fac9206d77f1ed21b0ef43bdf\",
                    \"avatar_small\": \"fd039245d688d43fac9206d77f1ed21b0ef43bdf\"
                },
                \"from\": {
                    \"is_from_cellphone\": 0,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"87c08ffd6529595870ad29b6\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 4,
                \"content\": \"作为首，都北京展现了整个国家的精气神，从生活节奏步调，到人文风情，再到建筑特色，风景等等，北京集聚了庄严但亲民，现代也古朴，秀丽也大气的多重特色。其实及时从小在北京城长大的人也很难读懂北京，她总是在绚丽的变化，展现不一样的姿色，吸引相同或不同的你。\",
                \"comment_count\": 0,
                \"recommend_count\": 0,
                \"pics\": [
                    {
                        \"pic_url\": \"5243fbf2b2119313c661279567380cd791238df1\",
                        \"ext\": {
                            \"width\": \"950\",
                            \"height\": \"1600\"
                        }
                    },
                    {
                        \"pic_url\": \"b7003af33a87e9505a0a2b4912385343fbf2b4f2\",
                        \"ext\": {
                            \"width\": \"1600\",
                            \"height\": \"950\"
                        }
                    },
                    {
                        \"pic_url\": \"0df3d7ca7bcb0a46a7fa521c6963f6246b60af3f\",
                        \"ext\": {
                            \"width\": \"1600\",
                            \"height\": \"950\"
                        }
                    }
                ],
                \"create_time\": 1382028016,
                \"update_time\": 1382028016
            },
            {
                \"user\": {
                    \"uid\": \"03003a0aee0dca24a530ed41\",
                    \"nickname\": \"二嚯嚯心\",
                    \"avatar_source\": \"1\",
                    \"avatar_large\": \"4e5fe4ba8ce59aafe59aafe5bf835033\",
                    \"avatar_middle\": \"4e5fe4ba8ce59aafe59aafe5bf835033\",
                    \"avatar_small\": \"4e5fe4ba8ce59aafe59aafe5bf835033\"
                },
                \"from\": {
                    \"is_from_cellphone\": 0,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"48b46fdf342d64c782c5983a\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 5,
                \"content\": \"来的几天没有下雪，赶上化雪最冷的时候，北海有猫，故宫有猫，圆明园有猫，长城有猫，这是一个和猫有关的城市，像猫一样慵懒的蜷缩在太阳下每至中午才昏昏欲醒。公园里拿着三脚架照天鹅的老人，天桥上寒风中站立望着来往车流的老人，胡同里风衣拐杖打扮的精神的老人，公交车上一靠站又上来一群老人，这是一个和老人和老有关的城市，还可以叫做古都。我只是在南锣看见居民房门贴着的请勿参观的标语时想到，我们把旅游是不是做过了？\",
                \"comment_count\": 0,
                \"recommend_count\": 0,
                \"pics\": [
                    {
                        \"pic_url\": \"34fae6cd7b899e511d81de3740a7d933c8950d81\",
                        \"ext\": {
                            \"width\": \"600\",
                            \"height\": \"800\"
                        }
                    },
                    {
                        \"pic_url\": \"f9dcd100baa1cd1180d59603bb12c8fcc3ce2db6\",
                        \"ext\": {
                            \"width\": \"600\",
                            \"height\": \"800\"
                        }
                    },
                    {
                        \"pic_url\": \"0ff41bd5ad6eddc4558550d83bdbb6fd526633b6\",
                        \"ext\": {
                            \"width\": \"600\",
                            \"height\": \"800\"
                        }
                    },
                    {
                        \"pic_url\": \"0823dd54564e9258003d62cd9e82d158ccbf4e8c\",
                        \"ext\": {
                            \"width\": \"800\",
                            \"height\": \"600\"
                        }
                    },
                    {
                        \"pic_url\": \"960a304e251f95ca34fc7695cb177f3e6709528c\",
                        \"ext\": {
                            \"width\": \"800\",
                            \"height\": \"600\"
                        }
                    }
                ],
                \"create_time\": 1381749774,
                \"update_time\": 1381813991
            },
            {
                \"user\": {
                    \"uid\": \"5df4ba604506cd31f802ced8\",
                    \"nickname\": \"p梦想高飞\",
                    \"avatar_source\": \"0\",
                    \"avatar_large\": \"503d269759ee3d6d80c1ecf942166d224f4adef9\",
                    \"avatar_middle\": \"a1ec08fa513d26978ad4636f54fbb2fb4316d8f9\",
                    \"avatar_small\": \"908fa0ec08fa513df4ad07ec3c6d55fbb2fbd9f9\"
                },
                \"from\": {
                    \"is_from_cellphone\": 0,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"cba6b8c7a70e4d168bfd2c36\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 4,
                \"content\": \"中国明清历史的体现，不过很多建筑都是后翻修的，让人痛恨当时的清政府腐败无能，不过2008年北京向世界再一次证明了自己\",
                \"comment_count\": 0,
                \"recommend_count\": 1,
                \"pics\": [
                    {
                        \"pic_url\": \"d31b0ef41bd5ad6ed1fc99c983cb39dbb6fd3c8f\",
                        \"ext\": {
                            \"width\": \"1600\",
                            \"height\": \"900\"
                        }
                    },
                    {
                        \"pic_url\": \"b8014a90f603738d954ff101b11bb051f819ec88\",
                        \"ext\": {
                            \"width\": \"1600\",
                            \"height\": \"900\"
                        }
                    },
                    {
                        \"pic_url\": \"42166d224f4a20a4361bc1e492529822720ed088\",
                        \"ext\": {
                            \"width\": \"1600\",
                            \"height\": \"900\"
                        }
                    }
                ],
                \"create_time\": 1381671773,
                \"update_time\": 1381746165
            },
            {
                \"user\": {
                    \"uid\": \"636a5d2e6715e2fa57f907dd\",
                    \"nickname\": \"bravehlp\",
                    \"avatar_source\": \"0\",
                    \"avatar_large\": \"962bd40735fae6cd54e82df30eb30f2443a70fc7\",
                    \"avatar_middle\": \"962bd40735fae6cd54e82df30eb30f2443a70fc7\",
                    \"avatar_small\": \"962bd40735fae6cd54e82df30eb30f2443a70fc7\"
                },
                \"from\": {
                    \"is_from_cellphone\": 0,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"f9d59bab5919cc801c460296\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 3,
                \"content\": \"虽然在北京生活了半年左右的时间，但个人对北京真的不感冒。不过北京这个地方可以去看看，也许我们不是为了美景，可能就是了却心中的那一种向往吧。\",
                \"comment_count\": 0,
                \"recommend_count\": 0,
                \"pics\": [],
                \"create_time\": 1383811019,
                \"update_time\": 1383811019
            },
            {
                \"user\": {
                    \"uid\": \"a95d9b0ab8e8ed52f2cad260\",
                    \"nickname\": \"凌淸雲\",
                    \"avatar_source\": \"0\",
                    \"avatar_large\": \"3f31c02fbc315c6074937a4a8db1cb134854776e\",
                    \"avatar_middle\": \"63fe056a34a85edfcf8aef8649540923dc54756e\",
                    \"avatar_small\": \"9c66db2ccffc1e178f987c8d4a90f603728de945\"
                },
                \"from\": {
                    \"is_from_cellphone\": 1,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"1260fd4491ddac4f0df3b3e1\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 5,
                \"content\": \"在北京过了五年，去过不少地方，北京就不评论了。颐和园是北京最值得去的休闲地方，我每年都要去几次\",
                \"comment_count\": 0,
                \"recommend_count\": 0,
                \"pics\": [],
                \"create_time\": 1383751621,
                \"update_time\": 1383751621
            },
            {
                \"user\": {
                    \"uid\": \"f30245f71f29292838a6ddc5\",
                    \"nickname\": \"tianmidwd\",
                    \"avatar_source\": \"1\",
                    \"avatar_large\": \"c0127469616e6d69647764ee03\",
                    \"avatar_middle\": \"c0127469616e6d69647764ee03\",
                    \"avatar_small\": \"c0127469616e6d69647764ee03\"
                },
                \"from\": {
                    \"is_from_cellphone\": 0,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"26cd4004e96e9c2df8ea15bf\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 2,
                \"content\": \"北京的确很繁荣，但是交通、水质、空气、消费都是不让人满意的。水实在难喝到一定的地步了，如果有缺钙什么的倒是可以去喝一喝。还有有些北京本地人，排外很严重，说话很让人讨厌，不就住在天安门附近么，那么破的四合院，我还不屑咧，有什么好牛X的……王府井假货太多，晚上很乱。不过要想练习英语口语，倒是不错的选择。\",
                \"comment_count\": 0,
                \"recommend_count\": 2,
                \"pics\": [],
                \"create_time\": 1381650404,
                \"update_time\": 1383709890
            },
            {
                \"user\": {
                    \"uid\": \"f5b304cbc6edc8de88ab55c7\",
                    \"nickname\": \"江苏大成\",
                    \"avatar_source\": \"0\",
                    \"avatar_large\": \"0b55b319ebc4b74552536804cdfc1e178b8215d8\",
                    \"avatar_middle\": \"0b55b319ebc4b74552536804cdfc1e178b8215d8\",
                    \"avatar_small\": \"0b55b319ebc4b74552536804cdfc1e178b8215d8\"
                },
                \"from\": {
                    \"is_from_cellphone\": 1,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"098fa312d9e00e16f6f5451a\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 5,
                \"content\": \"故宫很大很壮观，天坛，长城也还好，看见天安门的那一瞬间，很激动，鸟巢晚上七八点去的时候居然关灯，很失望，老北京的胡同游很赞。\",
                \"comment_count\": 0,
                \"recommend_count\": 0,
                \"pics\": [],
                \"create_time\": 1383478132,
                \"update_time\": 1383478132
            },
            {
                \"user\": {
                    \"uid\": \"ecc0d783511d734ac111e437\",
                    \"nickname\": \"若殇天\",
                    \"avatar_source\": \"1\",
                    \"avatar_large\": \"8ad7e88ba5e6ae87e5a4a90d0d\",
                    \"avatar_middle\": \"8ad7e88ba5e6ae87e5a4a90d0d\",
                    \"avatar_small\": \"8ad7e88ba5e6ae87e5a4a90d0d\"
                },
                \"from\": {
                    \"is_from_cellphone\": 1,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"495760c782c5db9a2ccc661a\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 4,
                \"content\": \"首都的历史丰富而多姿，在北京呆了近一个星期还是有很多景致没看。去的时候还小，没有现在这般的雾霾沉重。\",
                \"comment_count\": 0,
                \"recommend_count\": 0,
                \"pics\": [],
                \"create_time\": 1383469022,
                \"update_time\": 1383469022
            },
            {
                \"user\": {
                    \"uid\": \"d3fabf6a0213c7f437ae1df3\",
                    \"nickname\": \"Tina疏离\",
                    \"avatar_source\": \"0\",
                    \"avatar_large\": \"1e30e924b899a90101a7a0191f950a7b0208f50b\",
                    \"avatar_middle\": \"1e30e924b899a90101a7a0191f950a7b0208f50b\",
                    \"avatar_small\": \"1e30e924b899a90101a7a0191f950a7b0208f50b\"
                },
                \"from\": {
                    \"is_from_cellphone\": 1,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"3113cc124a3b52bfe305848c\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 4,
                \"content\": \"大帝都嘛 特色是有的 不过还是推荐南方人来看看吧 空气和交通是硬伤 但是天安门 颐和园 长城 还是要看看的 \",
                \"comment_count\": 0,
                \"recommend_count\": 0,
                \"pics\": [],
                \"create_time\": 1383325108,
                \"update_time\": 1383325108
            },
            {
                \"user\": {
                    \"uid\": \"4c315583b60b4708608bb14b\",
                    \"nickname\": \"avatar_of_win\",
                    \"avatar_source\": \"0\",
                    \"avatar_large\": \"3f31c02fbc315c6074937a4a8db1cb134854776e\",
                    \"avatar_middle\": \"63fe056a34a85edfcf8aef8649540923dc54756e\",
                    \"avatar_small\": \"9c66db2ccffc1e178f987c8d4a90f603728de945\"
                },
                \"from\": {
                    \"is_from_cellphone\": 1,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"b9c960b9bf896434ca26f08b\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 3,
                \"content\": \"真心大，真心够气派，生活品真心便宜，空气真心差，交通真心麻烦，车真心挤，东西真心难吃，服务态度真心没有\",
                \"comment_count\": 0,
                \"recommend_count\": 0,
                \"pics\": [],
                \"create_time\": 1383235361,
                \"update_time\": 1383235361
            },
            {
                \"user\": {
                    \"uid\": \"aaa59b1577240bb50a92adae\",
                    \"nickname\": \"talgentwill\",
                    \"avatar_source\": \"1\",
                    \"avatar_large\": \"076d74616c67656e7477696c6cd710\",
                    \"avatar_middle\": \"076d74616c67656e7477696c6cd710\",
                    \"avatar_small\": \"076d74616c67656e7477696c6cd710\"
                },
                \"from\": {
                    \"is_from_cellphone\": 1,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"508dc7ffaf3ee61562cf8a14\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 4,
                \"content\": \"每次去北京心态都不一样，从最初的瞻仰毛爷爷到现在站在北京街头有一种北漂的莫名哀伤。这里对于有的人来说是梦想，对于有的人来说是个战场。\",
                \"comment_count\": 0,
                \"recommend_count\": 0,
                \"pics\": [],
                \"create_time\": 1383130582,
                \"update_time\": 1383130582
            },
            {
                \"user\": {
                    \"uid\": \"5ff22fea89a5d8484b392980\",
                    \"nickname\": \"189*****825\",
                    \"avatar_source\": \"0\",
                    \"avatar_large\": \"3f31c02fbc315c6074937a4a8db1cb134854776e\",
                    \"avatar_middle\": \"63fe056a34a85edfcf8aef8649540923dc54756e\",
                    \"avatar_small\": \"9c66db2ccffc1e178f987c8d4a90f603728de945\"
                },
                \"from\": {
                    \"is_from_cellphone\": 0,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"1d2551f9100d53712a20f714\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 4,
                \"content\": \"去过二三十次的地方，合起来的时间也有一年左右了。现在感觉天气越来越差，人越发多，越发吵闹。可是还是喜欢那些文物和宝贝。\",
                \"comment_count\": 0,
                \"recommend_count\": 0,
                \"pics\": [],
                \"create_time\": 1383117265,
                \"update_time\": 1383117265
            },
            {
                \"user\": {
                    \"uid\": \"baca2b1d6c03ae067231c0b3\",
                    \"nickname\": \"太子030\",
                    \"avatar_source\": \"0\",
                    \"avatar_large\": \"3f31c02fbc315c6074937a4a8db1cb134854776e\",
                    \"avatar_middle\": \"63fe056a34a85edfcf8aef8649540923dc54756e\",
                    \"avatar_small\": \"9c66db2ccffc1e178f987c8d4a90f603728de945\"
                },
                \"from\": {
                    \"is_from_cellphone\": 1,
                    \"is_from_scene\": 1,
                    \"is_from_note\": 0,
                    \"is_from_pictravel\": 0
                },
                \"is_recommend\": 0,
                \"remark_id\": \"6e7c49168bfd652959582a12\",
                \"type\": 1,
                \"is_own\": 0,
                \"sid\": \"795ac511463263cf7ae3def3\",
                \"sname\": \"北京\",
                \"parent_sid\": \"5007715ac511463263cfd1f3\",
                \"score\": 5,
                \"content\": \"在北京走着寻着爱着。。。在路上体会着你的呼吸。。北京你好,北京再见,北京。。。。。等待。。。。\",
                \"comment_count\": 0,
                \"recommend_count\": 0,
                \"pics\": [],
                \"create_time\": 1383026142,
                \"update_time\": 1383026142
            }
        ]
    }
}','method'=>'GET'),
    array('aid'=>137,'url'=>'/user/ajax/remark/addremark','module_name'=>'user','description'=>'添加点评内容','params'=>'{
    \"type\":1,
    \"type#\": \"点评的不同类型，包括景点，画册等，暂时只有1,代表景点\",
    \"word\":\"等等等等等等等等等等等\",
    \"word#\": \"点评的内容\",
    \"score\":4,
    \"score#\": \"点评的分数\",
    \"xid\":\"48003aad20f5663ee7c8ebf3\",
    \"xid#\": \"点评内容的id，如景点的sid，画册的id等\",
    \"format\":\"ajax\",
    \"t\":1384158356279,
    \"bdstoken\":\"b22e2d8696f82cfd2cf2916775d4a810\"
}','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"remark\": {
            \"remark_id\": \"447f6529595870ad2b3528e2\",
            \"score\": 4,
            \"content\": \"zzzzzzzzzzzzzzzzzzzzzzzzzzzzzz\",
            \"is_first_remark\": null,
            \"pics\": [],
            \"user\": {
                \"uid\": \"5700cd55760eca986659f83d\",
                \"nickname\": \"congwupiece\",
                \"avatar_large\": \"960a304e251f95ca2b961a8cc8177f3e670952ad\",
                \"avatar_middle\": \"79f0f736afc3793131560e13eac4b74543a911c9\",
                \"avatar_small\": \"024f78f0f736afc34332b75fb219ebc4b74512c9\",
                \"avatar_source\": \"0\"
            },
            \"from\": {
                \"is_from_cellphone\": 0,
                \"is_from_scene\": 1,
                \"is_from_note\": 0,
                \"is_from_pictravel\": 0,
                \"nid\": 0,
                \"ptid\": 0,
                \"title\": \"\"
            },
            \"is_recommend\": 0,
            \"type\": 1,
            \"is_own\": 1,
            \"sid\": \"8caea431877117f5f47a5efb\",
            \"sname\": \"西湖\",
            \"parent_sid\": \"41fd1e4019c66b17a516aaf1\",
            \"comment_count\": 0,
            \"recommend_count\": 0,
            \"create_time\": 1380275103,
            \"update_time\": 1380275103
        }
    }
}','method'=>'POST'),
    array('aid'=>138,'url'=>'/destination/play/edit?surl=beijing&type=0&page=main','module_name'=>'destination','description'=>'【同步】经典玩法编辑页','params'=>'{
    \"classic_play\":{
        \"desc\":\"描述\",
        \"list\":[
            {
                \"pname\":\"玩法名称\",
                \"dpid\":\"玩法id\",
                \"desc_list\":[{
                    \"dpdid\":\"描述id\",
                    \"desc\":\"描述内容\",
                    \"related_uid\":\"相关用户id\"
                }],
                \"related_sids\":[],
                \"related_ress\":[],
                \"related_hotels\":[],
                \"pic_url\":\"\",
                \"pic_id\":\"\",
                \"ext\":{}
            }
        ]
    }
}','response'=>'{}','method'=>'GET'),
    array('aid'=>139,'url'=>'/destination/play/edit?surl=beijing&type=1&page=main','module_name'=>'destination','description'=>'【同步】进阶玩法','params'=>'{\"play\":{\"desc\":\"描述\",\"type\":\"0 经典，1进阶\",\"list\":[{\"pname\":\"玩法名称\",\"dpid\":\"玩法id\",\"desc_list\":[{\"dpdid\":\"描述id\",\"desc\":\"描述内容\",\"related_uid\":\"相关用户id\"}],\"related_sids\":[],\"related_ress\":[],\"related_hotels\":[],\"pic_url\":\"\",\"pic_id\":\"\",\"ext\":{},\"tag_id\":\"类型 0,1,2\"}]}}','response'=>'{}','method'=>'GET'),
    array('aid'=>140,'url'=>'/destination/play/adddesc','module_name'=>'destination','description'=>'【异步】玩法创建描述','params'=>'{
    \"dpid\":\"玩法id\",
    \"bdstoken\":\"\"
    }','response'=>'{
  \"errno\": 0,
  \"msg\": \"\",
  \"data\": {
      \"dpdid\":\"玩法简介id\"
  }
}','method'=>'POST'),
    array('aid'=>141,'url'=>'/destination/play/addplay','module_name'=>'destination','description'=>'【异步】玩法创建玩法','params'=>'{
    \"sid\":\"\",
    \"bdstoken\":\"\"
    }','response'=>'{
    \"errno\": 0,
    \"msg\": \"\",
    \"data\": {
        \"dpid\": \"玩法id\"
    }
}','method'=>'POST'),
    array('aid'=>142,'url'=>'/destination/play/save','module_name'=>'destination','description'=>'【异步】玩法提交','params'=>'{
    \"desc\":\"描述\",
\"list\": \"[{\\\"pname\\\":\\\"玩法名称\\\",\\\"pic_url\\\":\\\"\\\",\\\"pic_id\\\":\\\"\\\",\\\"ext\\\":\\\"\\\",\\\"desc_list\\\":[{\\\"desc\\\":\\\"描述内容\\\",\\\"related_uid\\\":\\\"相关用户id\\\",\\\"dpdid\\\":\\\"描述id\\\"}],\\\"related_sids\\\":[\\\"123\\\",\\\"456\\\"],\\\"related_ress\\\":[],\\\"related_hotels\\\":[\\\"789\\\"],\\\"position\\\":0}]\",
\"type\":0,
\"sid\":\"c19309736a7351eeeb69a4ff\",
\"bdstoken\":\"1644915ac9bbfa73cc142e3fd825182d\"
}','response'=>'{}','method'=>'POST'),
    array('aid'=>144,'url'=>'/user/*','module_name'=>'user','description'=>'【同步】个人中心页面person数据','params'=>'{}','response'=>'{
    \"usercenter_backgrounds_cms\":\"{}\",
    \"#usercenter_backgrounds_cms\":\"cms更换背景图列表数据\",
    \"person\": {
        \"experience\":{
            \"experience_list\":[{
                \"year\": \"2013\",
                \"count\": \"20\"
            },{
                \"year\": \"2012\",
                \"count\": \"2\"
            },{
                \"year\": \"2011\",
                \"count\": \"20\"
            },{
                \"year\": \"2010\",
                \"count\": \"10\"
            }],
            \"count\": 20
        },
        \"#experience\":\"旅历年的数据\",
        \"usercenter_backgroun_pic\":\"\",
        \"#usercenter_backgroun_pic\":\"用户背景图地址\",
        \"remark_count\": 40,
        \"#remark_count\": \"点评数\",
        \"comment_count\": 23,
        \"#comment_count\": \"留言数\",
        \"reply_count\": 23,
        \"#reply_count\": \"回复数\",
        \"pictravel_count\":20,
        \"#pictravel_count\":\"画册数\",
        \"plan_count\":20,
        \"#plan_count\":\"计划数\",
        \"user_recommend_count\":1,
        \"#user_recommend_count\":\"被推荐数\",
        \"is_recommend\":1,
        \"#is_recommend\":\"是否推荐过此用户\",
        \"visit_count\":33,
        \"#visit_count\":\"访问数\",
        \"uid\": \"d1703902f6bdae2b4d5fe99d\",
        \"uname\": \"xiaokchengkun\",
        \"nickname\": \"xiaokchengkun\",
        \"avatar_source\": \"0\",
        \"avatar_large\": \"79f0f736afc37931f833b62ae9c4b74543a9115d\",
        \"avatar_middle\": \"79f0f736afc37931f833b62ae9c4b74543a9115d\",
        \"avatar_small\": \"79f0f736afc37931f833b62ae9c4b74543a9115d\",
        \"self_introduction\": \"\",
        \"location_sid\": \"0\",
        \"location\": \"\",
        \"preferences\": [],
        \"is_blocked\": 0,
        \"user_level\": \"0\",
        \"owner_level\": \"0\",
        \"admin_level\": \"2\",
        \"is_audited\": 1,
        \"trust_level\": \"1\",
        \"score\": \"1977\",
        \"wealth\": \"48\",
        \"common_posts_count\": \"228\",
        \"going_count\": \"4\",
        \"gone_count\": \"30\",
        \"version_count\": \"0\",
        \"create_time\": \"0\",
        \"update_time\": \"1382798386\",
        \"last_login_time\": \"1386128364\"
    }
}','method'=>'GET'),
    array('aid'=>145,'url'=>'/mis/mall/ajax/productlist','module_name'=>'mis','description'=>'商城：查询商品列表','params'=>'{
    \"pn\": 0,
    \"rn\": 11,
    \"product_id\":1,
    \"product_name\":1,
    \"category\":1,
    \"property\":1,
    \"status\":1
}','response'=>'{
    \"list\": [{
        \"wealth_price\":1,
        \"remainder_num\":1,
        \"sale_num\": 1,
        \"status\":1,
        \"create_time\":1
    }],
    \"total\":1
}','method'=>'GET'),
    array('aid'=>146,'url'=>'/mis/mall/ajax/productadd','module_name'=>'mis','description'=>'商城：填加商品','params'=>'{
    \"product_name\":1,
    \"property\":1,
    \"category\":1,
    \"cost_price\":1.1,
    \"wealth_price\":1,
    \"remainder_num\":-1,
    \"status\":1,
    \"send_type\":1,
    \"info\":1,
    \"pics\": [],
    \"product_desc\":\"\"
    }','response'=>'{
    \"errno\":0,
    \"data\":{
        \"result\":1
    }

}','method'=>'POST'),
    array('aid'=>147,'url'=>'/mis/mall/ajax/productdel','module_name'=>'mis','description'=>'商城：商品删除','params'=>'{
    \"product_id[]\":1
    }','response'=>'{
    \"data\":{
        \"result\": 1
    }
    
    }','method'=>'GET'),
    array('aid'=>148,'url'=>'/mis/mall/ajax/orderlist','module_name'=>'mis','description'=>'订单列表','params'=>'{
    pn:1,
    rn: 1,
    order_id:1,
    username:1,
    product_name:1,
    receive_name:1,
    receive_phone:1
    }','response'=>'{
    list:[],
    total:1}','method'=>'GET'),
    array('aid'=>149,'url'=>'/mis/mall/ajax/orderupd','module_name'=>'mis','description'=>'订单修改','params'=>'{
    \"order_id\":1,
    \"order_msg\":\"\"
    }','response'=>'{}','method'=>'POST'),
    array('aid'=>150,'url'=>'/mis/mall/orderexport','module_name'=>'mis','description'=>'导出订单文件','params'=>'{

    }','response'=>'{}','method'=>'GET'),
    array('aid'=>151,'url'=>'/mis/mall/ajax/orderimport','module_name'=>'mis','description'=>'导入订单文件','params'=>'{
    order_up_file:1}','response'=>'{
    errno: 0,
    data:{
        result:1,
        total_num:1,
        fail_list:[]
    }}','method'=>'POST'),
    array('aid'=>152,'url'=>'/mis/mall/ajax/productswitch','module_name'=>'mis','description'=>'调换商品排序位置','params'=>'{
    \"product_id_orignial\":1,
    \"product_id_destination\":1
}','response'=>'{}','method'=>'POST'),
    array('aid'=>153,'url'=>'/mis/mall/ajax/wealthlist','module_name'=>'mis','description'=>'商城：财富值列表','params'=>'{
    \"create_time_start\": 1,
    \"create_time_end\": 1
}','response'=>'{}','method'=>'GET')
);


//var_dump($api);
function jsonToQuery(&$arr, $source, $prefix) {
    if(is_array($source)) {
        foreach($source as $key => $item) {
            $new_prefix = ($prefix ? $prefix.".": "").$key;
            jsonToQuery($arr, $item, $new_prefix);
        }
    }
    else {
        $arr[$prefix] = $source;
    }
}

$map = array();
foreach($api as $item) {
    $api_item = $item;
   // var_dump($item);
    $r = array(
        "name" => $item["description"],
        "url" => $item["url"],
        "method" => $item["method"],
        "description" => $item["description"]
    );
    $params = str_replace('\"', '"', $item["params"]);
    $params = json_decode($params, true);

    $response = str_replace('\"', '"', $item["response"]);
    $response = json_decode($response, true);


    $rp = array();
    $rr = array();

    jsonToQuery($rp, $params, null);
    jsonToQuery($rr, $response, null);

    foreach($rp as $key=>$item) {
        $r["params"][] = array(
            "Name" => $key,
            "Required" => "Y",
            "Default" => $item,
            "Type" => "string",
            "Description" => $item
        );
    }
    foreach($rr as $key=>$item) {
        $r["response"][] = array(
            "Name" => $key,
            "Required" => "Y",
            "Default" => $item,
            "Type" => "string",
            "Description" => $item
        );
    }
    $map[$api_item["module_name"]][] = $r;

}
foreach($map as $module_name => $api_array ) {
    $type_info[] = array(
        "name" => $module_name,
        "href" => $module_name,
        "description" => $module_name."的接口集合"
    );
    file_put_contents("../data/".$module_name.".json", json_encode($api_array));
}

file_put_contents("../data/type.json", json_encode($type_info));

