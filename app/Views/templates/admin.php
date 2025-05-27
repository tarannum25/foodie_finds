<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies Finds</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/admin.css">


</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAzLLDb2xjz87SM9GqcHf1zssixh9m2-Xk-A&s" alt="Foodie Finds">
            </div>
            <h2>Admin Panel</h2>
            <ul>
               <li><a href="/admin/home/index"><i>&#128202;</i> Dashboard</a></li>
               <li><a href="/admin/user/index"><i>&#128100;</i> Users</a></li>
               <li><a href="/admin/order/index"><i>&#128717;</i> Orders</a></li>
               <li><a href="/admin/category/index"><i>&#128230;</i> Category</a></li>
               <li><a href="/admin/product/index"><i>&#127828;</i> Products</a></li>
               <li><a href="/auth/login/logout"><i>&#128682;</i> Logout</a></li>
            </ul>
        </aside>
        <div class="main-content">
         <div class="header">
            <!-- <a href="#">Add Products</a> -->
            <div class="profile">
                Super Admin <img src="https://www.partysuppliesindia.com/cdn/shop/products/A3_43_fa283d51-14fb-4704-b57c-5ef5290f5a02.jpg?v=1735572737&width=1500" alt="Profile">
            </div>
        </div>


        <?php $this->content() ?>





    </body>
    </html>