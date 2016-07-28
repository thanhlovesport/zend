<?php
    require_once 'autoloader.php';
    
    // RSS thể thao http://vnexpress.net/rss/the-thao.rss
    
    $feed = new SimplePie();
    
    $feed->set_feed_url('http://vnexpress.net/rss/the-thao.rss');
    // Muốn sử dụng được ta phải gọi init()
    // Thiết lập cấu hình cho cache
    // Cache giúp lưu lại thông tin dùng để hiển thị nhanh hơn
    $feed->enable_cache(true);
    $feed->set_cache_duration(3600);
    $feed->set_cache_location('cache');
    $feed->handle_content_type();
    // Hạn chế các thuộc tính muốn lấy
    $feed->strip_attributes(array('width','height'));
    // Không lấy các thẻ HTML
    //$feed->strip_htmltags(array('img'));
    $feed->init();
    
    /* echo $feed->get_title();
    echo '<br/>'.$feed->get_permalink(); */
    
    foreach ($feed->get_items(0,2) as $item){
        echo $item->get_title().'<br/>';
        echo $item->get_description().'<br/>';
        echo $item->get_date('d/m/Y').'<br/>';
        echo '<hr/>';
    }
    /* echo '<pre>';
    print_r($feed);
    echo '</pre>'; */