<?php

// require('./connect.php');
// $results = mysqli_query("SELECT * FROM kitapeduli_album",$conn);
// $i = 0;
// while ($row = mysqli_fetch_array($results,MYSQL_ASSOC)) {
//   $post = array();
//   $post['post_status'] = 'publish';
//   $post['post_category'] = array(9, 3);
//   $post['post_date'] = date('Y-m-d H:i:s',strtotime($row['tanggal']));
//   $post['post_title'] = $row['judul'];
//   $post['post_content'] = $row['ringkasan'];
//   $post['post_type'] = 'post';
//   $posts[$i] = $post;
//   $i++;

//   require('./wp-load.php');
// foreach ($posts as $post) {
//   wp_insert_post($post);
//   echo $post;
// }

// }
// mysqli_free_result($results);

// mysqli_close($conn);



//Connecting to the custom database
// mysql_connect("localhost","root","root");
// @mysql_select_db("indosiar_www") or die( "Unable to select database");

//Querying database for content
// $query = "SELECT * FROM kitapeduli_album";
// $result=mysql_query($query);
//   if (!$result)
//   {
//     print "SQL QUERY [".$sql."] FAILED ";
//     print "[".mysql_error()."]";
//   } else {
//   	echo $result;
//   }
//Exiting this database, connecting to WP database
// mysql_close(); //Can be commented out if this causes problems
// mysql_connect("localhost","root","root");
// @mysql_select_db("pedulikasih") or die( "Unable to select database");

// $num=mysql_numrows($result);
// $i=0;

// while ($i < $num) {
// 	$id=mysql_result($result,$i,"ID");
// 	echo $id;
	// $title=mysql_result($result,$i,"Category");
	// $content=mysql_result($result,$i,"Joke");
	// $uniqueurl = "http://www.laugh.com/?p=".$id;

	// $query = "INSERT INTO wp_posts VALUES ('$id',1, '2009-01-01 00:01:00', '2009-01-01 00:01:00', '$content', '$title', 0, , 'publish', 'open', 'open', , '', , , '2009-01-02 00:00:00', '2009-01-02 00:00:00', , 0, '$uniqueurl', 0, 'post', , 0)";
	// mysql_query($query);

	// INSERT INTO wp_posts(ID,post_author,post_date,post_date_gmt,post_content,post_title,post_excerpt,post_status,comment_status,ping_status,post_password,post_name,to_ping,pinged,post_modified,post_modified_gmt,post_content_filtered,post_parent,guid,menu_order,post_type,post_mime_type,comment_count) VALUES (156,1,'28-02-16 5:24','28-02-16 5:24','Awal terbentuknya kegiatan Kita Peduli','kegiatan-kita-peduli-2001',NULL,'publish','open','open',NULL,'kegiatan-kita-peduli-2001',NULL,NULL,NULL,NULL,NULL,NULL,'http://localhost/pedulikasih/?p=156',0,'post',NULL,0);
// }

?> 