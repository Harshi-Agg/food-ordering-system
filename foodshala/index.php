/* This is the main or home page*/

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>FOODSHALA</title>
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="header">
      <div class="layer">
        <h1>FOODSHALA</h1>
        <p>Welcome To The 24/7 Food Service</p>
      </div>
    </div>
    <div id="navbar">
      <a class="navbar-brand" href="#">
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Home-icon.svg/1200px-Home-icon.svg.png"
          alt="logo"
          style="width: 20px;"
        />
      </a>
      <a class="active" href="javascript:void(0)">Home</a>
      <a href="menuitem.php">Menu</a>
      <a href="javascript:void(0)">Restaurants</a>
      <span id="navSpan"
        ><a class="navButton" id="signup" href="registrationCustomer.html"
          >Sign Up</a
        >
        <a
          class="navButton"
          id="login"
          onclick="document.getElementById('id01').style.display='block'"
          >Login</a
        ></span
      >
    </div>
    <div class="searchdiv">
      <div class="content">
        <div class="slider">ORDER FOOD ONLINE</div>
        <div class="slider">FEELING HUNGRY?</div>
        <div class="slider">LATE NIGHT AT OFFICE?</div>
        <div class="slider">NEED PIZZA?</div>
      </div>
      <div class="boxed">
        <p>
          <b
            >REGISTER YOUR RESTAURANT
            <a href="registrationRestaurant.html">HERE</a></b
          >
        </p>
        <p>
          <b
            >LOGIN YOUR RESTAURANT
            <a
              id="link"
              onclick="document.getElementById('id02').style.display='block'"
              >HERE</a
            ></b
          >
        </p>
      </div>
      <h2 style="width: 40%; font-weight: 700; color: #c03343;">
        Order food from favourite restaurants near you.
      </h2>
      <p style="width: 40%; font-weight: 600; color: rgb(255, 255, 255);">
        You can now find nearby Restaurants and Order your favourite food on
        FoodChow App. We will send you a link on your Email ID, Open it in your
        phone and download the app.
      </p>
    </div>
    <section class="main">
      <div class="inner">
        <div class="innermain1">
          <img
            style="width: 30%;"
            src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_210,h_398/4x_-_No_min_order_x0bxuf"
          />
          <span><p></p></span>
          <h6 style="color: white;">NO MINIMUM ORDER</h6>
          <p style="color: white;">
            Order in for yourself or for the group, with no restrictions on
            order value
          </p>
        </div>
        <div class="innermain2">
          <img
            style="width: 30%;"
            src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_224,h_412/4x_Live_order_zzotwy"
          />
          <span><p></p></span>

          <h6 style="color: white;">LIVE ORDER TRACKING</h6>
          <p style="color: white;">
            Know where your order is at all times, from the restaurant to your
            doorstep
          </p>
        </div>
        <div class="innermain3">
          <img
            style="width: 30%;"
            src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_248,h_376/4x_-_Super_fast_delivery_awv7sn"
          />
          <span><p></p></span>
          <h6 style="color: white;">LIGHTENING FAST DELIVERY</h6>
          <p style="color: white;">
            Experience foodshala's superfast delivery for food delivered fresh &
            on time
          </p>
        </div>
      </div>
    </section>
    <div class="maincontainer">
      <img
        style="width: 25%; float: left;"
        src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_768,h_978/pixel_wbdy4n"
      />
      <img
        style="width: 25%; float: left;"
        src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_768,h_978/iPhone_wgconp_j0d1fn"
      />

      <div class="middiv">
        <h1>Restaurants In Your Pocket</h1>
        <p style="color: grey;">
          <b>Order from your favorite restaurants & track on the go</b>
        </p>
        <a id="btn" type="button" href="login.html">Order Now</a>
      </div>
    </div>
    <div id="id01" class="modal">
      <form class="modal-content animate" action="login.php" method="post">
        <div class="imgcontainer">
          <span
            onclick="document.getElementById('id01').style.display='none'"
            class="close"
            title="Close Modal"
            >&times;</span
          >
          <img
            src="https://www.w3schools.com/howto/img_avatar2.png"
            alt="Avatar"
            class="avatar"
          />
        </div>
        

        <div class="container">
          <label><b>Email_id</b></label>
          <input
            type="text"
            placeholder="Enter email_id"
            name="email"
            required
          />

          <label><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="password"
            required
          />

          <button name="submit" type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember" /> Remember
            me
          </label>
        </div>

        <div class="container" style="background-color: #f1f1f1;">
          <button
            type="button"
            onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn"
          >
            Cancel
          </button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>

    <script>
      // Get the modal
      var modal = document.getElementById("id01");

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    </script>
    <div id="id02" class="modal">
      <form class="modal-content animate" action="restlogin.php" method="post">
        <div class="imgcontainer">
          <span
            onclick="document.getElementById('id02').style.display='none'"
            class="close"
            title="Close Modal"
            >&times;</span
          >
          <img
            src="https://www.w3schools.com/howto/img_avatar2.png"
            alt="Avatar"
            class="avatar"
          />
        </div>

        <div class="container">
          <label><b>Email_id</b></label>
          <input
            type="text"
            placeholder="Enter email_id"
            name="email"
            required
          />

          <label><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="password"
            required
          />

          <button name="submit" type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember" /> Remember
            me
          </label>
        </div>

        <div class="container" style="background-color: #f1f1f1;">
          <button
            type="button"
            onclick="document.getElementById('id02').style.display='none'"
            class="cancelbtn"
          >
            Cancel
          </button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>

    <script>
      // Get the modal
      var modal = document.getElementById("id02");

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    </script>
  </body>
</html>
