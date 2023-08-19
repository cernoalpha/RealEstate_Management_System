<!-- add_property.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Property</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/add_property.css">
</head>
<body>
<nav class="navbar">
<div class="navbar-brand">
                <img src="css/app-data/logo.png" alt="Logo">
                <span>Shahzad</span>
            </div>
        <div class="navbar-links">
            <a href="my_properties.php"><i class="fas fa-home"></i> My Properties</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </nav>
    <div class="add-property-container">
        <div class="add-property-card">
            <form id="propertyForm" action="php/add_property.php" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="propertyName"><i class="fas fa-home"></i></label>
                    <input type="text" id="propertyName" name="propertyName" placeholder="Property Name" required>
                </div>
                
                <div class="input-group">
                    <label for="propertyLocation"><i class="fas fa-map-marker-alt"></i></label>
                    <input type="text" id="propertyLocation" name="propertyLocation" placeholder="Property Location" required>
                </div>
                
                <div class="input-group">
                    <label for="city"><i class="fas fa-city"></i></label>
                    <input type="text" id="city" name="city" placeholder="City" required>
                </div>
                
                <div class="input-group">
                    <label for="bhkType"><i class="fas fa-bed"></i></label>
                    <select id="bhkType" name="bhkType">
                        <option value="1">1 BHK</option>
                        <option value="2">2 BHK</option>
                        <option value="3">3 BHK</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                
                <div class="input-group">
                    <label for="budget"><i class="fas fa-money-bill"></i></label>
                    <select id="budget" name="budget">
                        <option value="5000">₹5000</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                
                <div class="input-group">
                    <label for="propertyType"><i class="fas fa-building"></i></label>
                    <select id="propertyType" name="propertyType">
                        <option value="apartment">Apartment</option>
                        <option value="villa">Villa</option>
                        <option value="house">House</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                
                <div class="input-group">
                    <label for="builtUpArea"><i class="fas fa-ruler"></i></label>
                    <select id="builtUpArea" name="builtUpArea">
                        <option value="500">500 sqft</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                
                <div class="input-group">
                    <label for="furnishingType"><i class="fas fa-couch"></i></label>
                    <select id="furnishingType" name="furnishingType">
                        <option value="unfurnished">Unfurnished</option>
                        <option value="semiFurnished">Semi-furnished</option>
                        <option value="fullyFurnished">Fully furnished</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                
                <div class="input-group">
                    <label for="propertyAge"><i class="fas fa-clock"></i></label>
                    <input type="number" id="propertyAge" name="propertyAge" placeholder="Property Age" required>
                </div>
                
                <div class="input-group">
                    <label for="propertyImage"><i class="fas fa-image"></i></label>
                    <input type="file" id="propertyImage" name="propertyImage" accept="image/*" required>
                </div>
                
                <input type="hidden" name="sellerId" value="<?php echo $_SESSION['seller_id']; ?>">
                
                <button type="submit">Add Property</button>
            </form>
        </div>
    </div>
</body>
</html>
