<h3></h3><?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>

<main class="content">
	<div class="table-container">
		<h2>User Details</h2>
		<table>
			<tr>
				<td>First Name</td>
				<td><?= $user->first_name ?></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><?= $user->last_name ?></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><?= $user->phone ?> </td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?= $user->email ?> </td>
			</tr>
		</table>
	</div>
	<div class="table-container" style="margin-top: 32px">
		<h2>Order List</h2>
		<table>
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>Order Date</th>
		            <th>Gross Total</th>
		            <th>Sub Total</th>
		            <th>Status</th>
		            <th>Action</th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php foreach ($orders as $o): ?>
		        <tr>
		            <td><?= $o->id ?></td>
		            <td><?= $o->order_date ?></td> 
		            <!-- <td><img src="https://media-cdn.tripadvisor.com/media/photo-s/11/9f/01/81/mutton-briyani.jpg" alt="Biryani" class="product-image"></td> -->
		            <td><?= $o->gross_total ?></td>
		            <td><?= $o->sub_total ?></td>
		            <td><span class="<?= $o->status ?>"></span></td>
		            <td>
		                <a href="/admin/order/<?= $o->id ?>/show" class="view-link">View</a>
		            </td>
		            <?php endforeach; ?>
		        </tr>
		    </tbody>
		</table>
	</div>
</main>