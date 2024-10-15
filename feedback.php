<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baliyan-feedback.com</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;


            margin: 0;
            padding: 0;
            display: felx;
            height: 50vh;
            line-height: 1.6;
            align-items: center;
            justify-content: center;

            background: #f0f2f5;
        }
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            box-sizing: border-box;
        }

        /* Header styles */
        header {
            padding: 10px;
            color: #fff;
            border-radius: 110px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            width: 1380px;
            margin: auto;
            margin-top: 30px;
            margin-bottom: 40px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;

        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        section {
background-color: #fff7ff;
            padding: 20px;
        }

        form {
            background-color: #ffe4e1;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
        }

        fieldset {
           
            border: 8px solid #ddd;
            padding: 10px;
            
            border-radius: 5px;
        }

        legend {
            font-size: 1.2em;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            background-color: 000000;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .mainsearch {
            margin-top: 6px;
            margin-left: -200px;
            margin-right: -20px;
            padding: 10px 20px;

        }

        .mainsearchbutton {
            margin-top: -3.5px;
            margin-left: -310px;
            background: black;
            color: white;
            padding: 10.5px 15px;
            font-size: 1.1rem;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .mainsearchbutton:hover {
            transition: 0.3s;
            background: #1668e3;
            ;
        }


        /* Logo styles */
        /* Logo styles */
        .logo img {
            margin-top: 6px;
            margin-left: 12px;
            max-width: 200px;
            height: auto;
            color: white;
            border-radius: 300px;
        }


        .header-buttons {
            color: white;
            display: flex;
            align-items: center;
        }

       
        .contact-btn {
            background: rgb(0, 0, 0);
            color: #fff;
            border: none;
            padding: 10px 5px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 25px;
            margin-left: -220px;
        }

        .contact-btn:hover {
            transition: 0.3s;
            background: #1668e3;
        }


        .banner {
            position: relative;
            width: 1425px;
            margin: auto;
            background-position: center;
            background-size: center;
            padding: 1px;
            height: 600px;
        }

        .banner button {
            width: 200px;
            padding: 10px;
            margin: 10px 1px;
            text-align: center;
            border-radius: 6px;
            color: white;
            background: black;
            border: 2px;
            font-size: 20px;
            cursor: pointer;
            font-weight: 600;
        }

        .banner button:hover {
            color: white;
            background: #1668e3;
            transition: 0.5s;
        }

        .banner button:hover {
            color: white;
        }


        .content {
            width: 100%;
            position: absolute;
            color: white;
            top: 30%;
            transform: translateY(-50%);
            text-align: center;
        }

        .content h1 {
            margin-top: 80px;
            font-size: 60px;
            font-weight: 800;
        }


        .banner video {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: -1;
            border-radius: 20px;
        }

        @media(min-aspect-ratio: 16/9) {
            .banner video {
                width: 100%;
                height: auto;
            }
        }


        section {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 5px;
            color: #010001;
            text-align: center;
        }
         
        form {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #000000;
            border-radius: 5px;
        }

        button {
            background-color: #000000;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
        }

        button:hover {
           transition: 0.3s;
            background: #1668e3;
        }

        .reviewsec {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            border-radius: 20px;
            background-color: #f7ffff;
            width: 1425px;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;
        }
        .reviewsec h2 {
            text-align: center;
            margin-bottom: 10px;
        
    }
        #reviewsContainer {
            margin-top: 0%;
            display: flex;
            flex-wrap: wrap;
        }

        .review {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            width: calc(50% - 20px);
            box-sizing: border-box;
        }

        .review img,
        .review video {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .review p {
            margin: 10px 0;
        }

        .review .rating {
            font-weight: bold;
            color: #f39c12;
        }

        /* Basic footer styling */
        footer {
            border-radius: 20px;
            background-color: white;
            padding: 40px 0;
            font-family: Arial, sans-serif;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 1425px;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        /* Flex container for the footer columns */
        .footer-container {
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Styling for each footer column */
        .footer-column {
            flex: 1;
            padding: 0 20px;
        }

        /* Heading styles */
        .footer-column h3 {
            font-size: 18px;
            color: #003366;
            margin-bottom: 15px;
        }

        /* Unordered list style for links */
        .footer-column ul {
            list-style-type: none;
            padding: 0;
        }

        /* Individual list item style */
        .footer-column ul li {
            margin-bottom: 10px;
            transition: transform 0.3s ease-in-out;
            /* Smooth zoom transition */
        }

        /* Link styles */
        .footer-column ul li a {
            text-decoration: none;
            color: #333;
            display: inline-block;
            transition: transform 0.3s ease, color 0.3s ease;
            /* Add smooth transition for zoom and color change */
        }

        /* Hover effect: Zoom in on the link and change color */
        .footer-column ul li a:hover {
            color: #003366;
            transform: scale(1.1);
            /* Zoom the link */
        }

        /* Social media icon style */
        .footer-column ul li img {
            width: 24px;
            margin-right: 10px;
            transition: transform 0.3s ease;
            /* Add zoom effect for icons */
        }

        /* Hover effect for icons: Zoom in */
        .footer-column ul li img:hover {
            transform: scale(1.2);
            /* Zoom the icons */
            opacity: 0.7;
        }

        .lastfooter {
            color: #000000;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <a href="#"><img src="./All-photos/logobaliyanwebsite.jpeg" alt="logo"></a>
        </div>

        <div class="mainsearch">
            <input type="text" id="location" placeholder="Search reviews here" required>
        </div>
        <div>
            <button class="mainsearchbutton">Search</button>
        </div>
        <div class="header-title"></div>
        <button id="contactBtn" class="contact-btn">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </nav>
        </button>
        <button id="contactBtn" class="contact-btn">
            <nav>
                <ul>
                    <li><a href="explorehotels.html">Hotels</a></li>
                </ul>
            </nav>
        </button>
        <button id="contactBtn" class="contact-btn">
            <nav>
                <ul>
                    <li><a href="hiddenGems.html">Hidden Gems</a></li>
                </ul>
            </nav>
        </button>
        <button id="contactBtn" class="contact-btn">
            <nav>
                <ul>
                    <li><a href="popularAttractions.html">Destinations</a></li>
                </ul>
            </nav>
        </button>

    </header>

    <div class="banner">
        <video autoplay loop muted plays-inline>
            <source src="./All-videos/websiteVideo 3 feedback.mp4" type="video/mp4">
        </video>

        <div class="content">
            <h1>UPLOAD REVIEWS</h1>
            <div>
                <button class="button">
                    <nav>
                        <ul>
                            <li><a href="#submit-review">Upload Now</a></li>
                        </ul>
                    </nav>
                </button>
            </div>
        </div>
    </div>
    <div class="reviewsec" id="submit-review">
        <h1>Customer Testimonials</h1>
        <h2>Submit Your Review</h2>
        <form id="reviewForm" action="submit_review.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        
            <label for="rating">Rating (1 to 5):</label>
            <select id="rating" name="rating" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        
            <label for="reviewText">Review:</label>
            <textarea id="reviewText" name="reviewText" rows="4" required></textarea>
        
            <label for="photo">Upload Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*">
        
            <label for="video">Upload Video:</label>
            <input type="file" id="video" name="video" accept="video/*">
        
            <button type="submit">Submit Review</button>
        </form>
        
    </div>
    
    <div class="reviewsec" id="reviews">
        <h1>Customer Reviews</h1>
        <div id="reviewsContainer">
            <!-- Reviews will be dynamically inserted here -->
        </div>
    </div>
    <script src="scripts.js"></script>
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3><big>Contact Us</big></h3>
                <ul>
                    <li><a href="#">Customer Support</a></li>
                    <li><a href="#">Service Guarantee</a></li>
                    <li><a href="#">More Service Info</a></li>
                    <li>
                        <a href="#"><img
                                src="./All-photos/facebook footer image.png"
                                alt="Facebook"></a>
                        <a href="#"><img src="./All-photos/twitter-icon footer image.png"
                                alt="Twitter"></a>
                        <a href="#"><img
                                src="./All-photos/youtube icon footer image.png"
                                alt="YouTube"></a>
                    </li>
                </ul>
            </div>
            <div class="footer-column">
                <h3><big> About Us </big></h3>
                <ul>
                    <li><a href="#">Privacy Statement</a>
                    </li>

                    <li><a href="termsandcond.html">Terms & Conditions</a></li>
                    <li><a href="aboutus.html">About CrashCoder.com</a></li>


                </ul>
            </div>
            <div class="footer-column">
                <h3><big>Other Services</big></h3>
                <ul>
                    <li><a href="#">Security</a></li>
                    <li><a href="explorehotels.html">Hotels</a></li>

                    <li><a href="hiddenGems.html">Hidden Gems</a></li>
                    <li><a href="popularAttractions.html">Popular Attraction</a></li>

                </ul>
            </div>
        </div>
        <div class="lastfooter">
            <p>&copy; 2024 crashcoder.com All rights reserved.</p>
        </div>
    </footer>
</body>
<script>
function saveReview(review) {
    let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
    reviews.push(review);
    localStorage.setItem('reviews', JSON.stringify(reviews));
}

function loadReviews() {
    const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
    reviews.forEach((review, index) => displayReview(review, index));
}

function displayReview(review, index) {
    const reviewElement = document.createElement('div');
    reviewElement.className = 'review';

    reviewElement.innerHTML = `<div class="rating">Rating: ${review.rating} ⭐ </div>`;
    
    reviewElement.innerHTML += `<p><strong>${review.name}:</strong> ${review.reviewText}</p>`;
    
    if (review.photo) {
        reviewElement.innerHTML += `<img src="${review.photo}" alt="Review Photo">`;
    }
    
    if (review.video) {
        reviewElement.innerHTML += `<video controls src="${review.video}"></video>`;
    }

    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.onclick = function () {
        deleteReview(index);
    };
    reviewElement.appendChild(deleteButton);

    document.getElementById('reviewsContainer').appendChild(reviewElement);
}

function deleteReview(index) {
    let reviews = JSON.parse(localStorage.getItem('reviews')) || [];
    reviews.splice(index, 1);  // Remove the review at the specified index
    localStorage.setItem('reviews', JSON.stringify(reviews));  // Update local storage

    document.getElementById('reviewsContainer').innerHTML = '';  // Clear current reviews
    loadReviews();  // Load remaining reviews
}

// Load reviews when the page loads
window.onload = loadReviews;

document.getElementById('reviewForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const rating = document.getElementById('rating').value;
    const reviewText = document.getElementById('reviewText').value;
    const photo = document.getElementById('photo').files[0];
    const video = document.getElementById('video').files[0];

    const review = {
        name,
        rating,
        reviewText,
        photo: photo ? URL.createObjectURL(photo) : null,
        video: video ? URL.createObjectURL(video) : null
    };

    saveReview(review);

    displayReview(review, JSON.parse(localStorage.getItem('reviews')).length - 1);

    document.getElementById('reviewForm').reset();
});
</script>

</html>