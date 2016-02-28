<tr> 
	<!-- nama donatur -->
	<td><?php the_title() ?></td> 
	<!-- asal kota -->
	<td><?php the_excerpt() ?></td>
	<!-- donasi -->
	<td><?php echo 'Rp'. get_the_content(); ?></td>
	<!-- tanggal -->
	<td><?php the_date() ?></td>
</tr>