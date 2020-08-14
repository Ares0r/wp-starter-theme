<?php

//add breadcrumbs
/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */


// function get_breadcrumb() {
//     echo '<li class="breadcrumb-item"><a href="'.home_url().'">home</a></li>';
//     if (is_category() || is_single()) {
//         echo "   ";
//         echo "<li class='bcrumbs--item'>";
//         echo the_category(' - ');
//         echo "</li>";;
//             if (is_single()) {
//                 // echo " -  ";
//                 if (get_post_type() != 'aktualnosci') {
                
//                 }
//                 if (get_post_type() == 'realizacje') {
//                   echo '<a class="bcrumbs--item" href=" ' . home_url() . '/'. get_post_type() .' ">'.get_post_type().'</a>';
//                 }
//                 echo "<li class='bcrumbs--item'> ";
//                   the_title();
//                 echo "</li>";  
//             }
//     } elseif (is_archive()) {
//           echo "<li class='bcrumbs--item' >";
//           echo get_post_type();
//           echo "</li>";
//     } elseif (is_page()) {
//                 // echo " -  ";
//                 echo "<li class='bcrumbs--item active' aria-current='page'>";
//                 // echo get_post_type();             
//                 echo the_title();
//                 echo "</li>"; 
//     } elseif (is_search()) {
//         echo "  - ;Search Results for... ";
//         echo '"<em>';
//         echo the_search_query();
//         echo '</em>"';
//     }
//   }



/* 
All the essential custom functions through different projects

TODO:
1. custom function for fetching posts
2. function for fetching posts with additional params
3. function for fetching newer/older posts
4. function for adding data from posts to db

*/


//get all realisations from db - with pagination parameters ($currentPage)
// function fetchProjects($currentPage) {
//     global $wpdb;
  
//   if ($currentPage == null) {
//     $currentPage = 1;
//   } else {
//     $pageNumber = ($currentPage-1) * 6;
  
//   }
   
//     $args = array(
//        'post_type' => 'realizacje',
//        'posts_per_page' => 6,
//        'offset' => $pageNumber
  
//   );
//   $the_query  = new WP_Query( $args );
  
//   $projects = $the_query;
  
//   return $projects;
//   };

// fetch polish news on main page
function fetchSystemsForSidebar() {
  global $wpdb;

  $args = array(
    'post_type'     => 'systemy',

  );

  $query = new WP_Query($args);
  $systemy = $query;
  return $systemy;

}

//fetch english news on main page
// function fetchEnglishNews() {
//   global $wpdb;

//   $args = array(
//     'post_type'     => 'post',
//     'category_name' => 'en',
//     'meta_key'      => 'na_glowna',
//     'meta_value'    => true,
//     'posts_per_page' => 3

//   );

//   $query = new WP_Query($args);
//   $news = $query;
//   return $news;

// }


// function shortenExcerpt($excerpt,$length) {
//   $fullExcerpt = $excerpt;
//   $tempExc = explode(" ",$fullExcerpt,$length);
//   $tempExcPopped = array_slice($tempExc,0,$length-1);
//   $theEx = implode(" ", $tempExcPopped);
//   return $theEx;
// }







?>