
<style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            text-align: center;
            padding: 50px;
            color: white;
        }
        .container {
            margin-top: 20px;
            background-image: url('8BBL4t.gif');
            padding: 20px;
            border-radius: 10px;
            display: none;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        select {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            outline: none;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        .links a {
            color: yellow;
            display: block;
            margin-top: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Welcome to Our Website!</h1>
    <button onclick="showForm()">Enter Your Details</button>
    
    <div class="container" id="formContainer">
        <h2>Register Here</h2>
        <form action="connect.php"method="post">
            <input type="text" name="fullname" placeholder="Full Name" required name="fullname"><br>
            <input type="email" name="email" placeholder="Email" required ><br>
            <input type="tel" name="mobile" placeholder="Mobile Number" pattern="[0-9]{10}" required><br>
            <select name="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="repassword" placeholder="Confirm Password" required><br>
            <button type="submit" name="submit" class="btn ">Submit</button>
            </form>
        <div class="links">
            <a href="#">Forgot Password?</a>
            <a href="#">Login</a>
            <a href="#">Helpdesk</a>
        </div>
    </div>

    <script>
        function showForm() {
            document.getElementById('formContainer').style.display = 'block';
        }
    </script>
    
</body>