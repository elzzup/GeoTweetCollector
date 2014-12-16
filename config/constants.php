<?php

// DB constants
define('DB_TN_PREFIX', 'gc_');

define('DB_TN_TWEETS'               , DB_TN_PREFIX . 'tweets');
define('DB_CN_TWEETS_ID'            , 'id');
define('DB_CN_TWEETS_TWEET_ID'      , 'tweet_id');
define('DB_CN_TWEETS_TWEET_USER_ID' , 'tweet_user_id');
define('DB_CN_TWEETS_TEXT'          , 'text');
define('DB_CN_TWEETS_LATLNG'        , 'latlng');
define('DB_CN_TWEETS_RULES_ID'      , 'rule_id');

define('DB_CN_TWEETS_GEO_LAT', 'geo_lat');
define('DB_CN_TWEETS_GEO_LON', 'geo_lon');

define('DB_TN_RULES'           , DB_TN_PREFIX . 'rules');
define('DB_CN_RULES_ID'        , 'id');
define('DB_CN_RULES_LABEL'     , 'label');
define('DB_CN_RULES_DATE'      , 'date');
define('DB_CN_RULES_LAT'       , 'lat');
define('DB_CN_RULES_LON'       , 'lon');
define('DB_CN_RULES_RADIUS_KM' , 'radius_km');

define('FORMAT_DATE' , 'Y-m-d');

// PATH
if (ENV == ENV_DEVELOP) {
    define('URL_ROOT' , '//localhost/tweetcollector/');
} else {
    define('URL_ROOT' , '');
}
//GeomFromText('POINT(139.766084 35.681382)')
