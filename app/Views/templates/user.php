<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie Finds Dashboard</title>
    <link rel="stylesheet" href="/assets/css/dashboardstyles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <script>
        function toggleTheme() {
            document.body.classList.toggle('light-theme');
        }
    </script>
</head>
<body>
    <div class="dashboard">
        <!-- Header Section -->
        <header class="dashboard-header">
            <div class="logo-container">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAzLLDb2xjz87SM9GqcHf1zssixh9m2-Xk-A&s" alt="Foodie Finds Logo" class="logo">
                <h1>ƒσσ∂ιєѕ ƒιη∂ѕ</h1>
            </div>
            <div class="header-buttons">

                <button class="header-btn" onclick="toggleTheme()">                      
                    <i class="ri-contrast-2-fill"></i>
                </button>

                
                    <a href="/user/setting"class="header-btn" aria-label="Settings">
                        <i class="ri-user-settings-line"></i>
                    </a>
            

                <a href="/user/orderhistory" class="header-btn" aria-label="Order History">
                    <i class="ri-history-line"></i>
                </a>

                <a href="/user/checkout" class="header-btn"  aria-label="Cart">
                    <i class="ri-shopping-cart-2-fill"></i>
                </a>

                <a href="/auth/login/logout" class="header-btn" aria-label="Logout">
                    <i class="ri-logout-box-r-line"></i>
                </a>

            </div>
        </header>
    </div>


    <?php $this->content() ?>

</body>
</html>
