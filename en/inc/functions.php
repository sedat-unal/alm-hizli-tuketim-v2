<?php

function itemGeneretor($items)
{
    include('./db/connect.php');
    global $html;
    $query = $dbh->query('SELECT DISTINCT * FROM dropdowns d left join items i on d.page_link = i.item_belongs_to WHERE d.status = 1 and i.item_status = 1 and d.page_link ="' . $items . '"')->fetchAll();
    foreach($query as $row) {
        $html .= '<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">'."\n".'';
            $html .= '<div class="section_1_gallery_grid">'."\n".'';
                $html .= '<a title="' . $row['item_description'] . '" href="images/g1.jpg">'."\n".'';
                $html .= '<div class="section_1_gallery_grid1">'."\n".'';
                    $html .= '<img src="images/g1.jpg" alt=" " class="img-responsive"/>'."\n".'';
                    $html .= '<div class="proj_gallery_grid1_pos">'."\n".'';
                        $html .= '<h3>' . $row['item_name'] . '</h3>'."\n".'';
                        $html .= '<p>' . mb_substr($row['item_description'], 0, 50, 'utf8')  . '</p>'."\n".'';
                    $html .= '</div>'."\n".'';
                $html .= '</div>'."\n".'';
                $html .= '</a>'."\n".'';
            $html .= '</div>'."\n".'';
        $html .= '</div>'."\n".'';
    }
    echo  $html;
}
