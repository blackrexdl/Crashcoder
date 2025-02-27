<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Tech-thrive.com</title>
    <link rel="stylesheet" href="style.css">
    <!-- ALl css here  -->
    <style>
        /* Background for the entire body */
        body {
            /* Add your image URL here */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 50vh;
            margin: 0;
            padding: 0;
            font-family: Gilroy;
            display: felx;
            line-height: 1.6;
            align-items: center;
            justify-content: center;
            background: #f0f2f5;
        }
 /* Spinner container */
 .spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(255, 255, 255, 0.8); /* Light overlay */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Ensure it stays on top */
        }
        /* Spinner icon */
        .spinner-icon {
            border: 4px solid rgba(0, 0, 0, 0.1); /* Light grey border */
            border-left-color: #3498db; /* Bright blue spinner color */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }
        /* Keyframes for the spinner animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        /* Hide the spinner once the loading is complete */
        .hidden {
            display: none;
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

            background-color: #000000;
            width: 180px;
            padding: 10px;
            margin: 15px 5px;
            text-align: center;
            border-radius: 6px;
            color: black;
            border: 2px;
            font-size: 20px;
            cursor: pointer;
            font-weight: 600;
        }

        .banner button:hover {
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
            font-size: 40px;
            font-weight: 800;
        }

        .banner p {
            font-size: 24px;
            color: #ffffff;
            /* Strong blue for hero text */
            margin: 20px 0;
        }

        .banner video {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: -1;
            border-radius: 20px;
            width: 1425px;
        }

        @media(min-aspect-ratio: 16/9) {
            .banner video {
                width: 100%;

                height: auto;
            }
        }

        /* Header styles */
        header {

            padding: 10px;
            color: #fff;
            border-radius: 110px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
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

            padding: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        fieldset {
            border: 1px solid #ddd;
            padding: 10px;
            background-color: #FFFFF7;
            border-radius: 5px;
            margin-bottom: 30px;
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
            margin-top: 10px;
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .mainsearch {
            margin-bottom: 10px;

            margin-top: 6px;
            margin-left: -80px;

            border-radius: 5px;
        }

        .mainsearchbutton {
            margin-left: 0px;
            background: black;
            color: #fff;
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .mainsearchbutton:hover {

            transition: 0.3s;
            background: #1668e3;
            color: white;
        }


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
            font-size: 16px;
            font-weight: bold;
        }

        .sign-in-btn,
        .weather-btn,
        .contact-btn {
            background: rgb(0, 0, 0);
            color: #fff;
            border: none;
            padding: 10px 10px;
            font-size: -1rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            margin-right: -70px;
            margin-left: -20px;
        }

        .sign-in-btn:hover,
        .weather-btn:hover,
        .contact-btn:hover {
            background: #1668e3;
            transition: 0.3s;
            color: white;
        }

        /* Modal Styles */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 4% auto;
            /* 15% from the top and centered */
            padding: 50px;
            border: 1px solid #888;
            width: 6000px;
            /* Could be more or less, depending on screen size */
            max-width: 800px;
            border-radius: 8px;
        }

        .modal-content button:hover {
            background: #1668e3;
            transition: 0.3s;
            color: white;

        }

        .close-btn {
            color: #aaa;
            float: right;
            font-size: 30px;
            font-weight: bold;
        }


        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .container {
            position: relative;
            max-width: 700px;
            width: 100%;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .container header {
            font-size: 1.5rem;
            color: #333;
            font-weight: 500;
            text-align: center;

        }

        .container .form {
            margin-top: 20px;
        }

        .form .input-box {
            width: 100%;
            margin-top: 20px;
        }

        .input-box label {
            color: #333;
        }

        .form :where(.input-box input, .select-box) {
            position: relative;
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 15px;
        }

        .input-box input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .form .column {
            display: flex;
            column-gap: 15px;
        }

        .select-box select {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            color: #707070;
            font-size: 1rem;
        }

        .form button {
            height: 55px;
            width: 100%;
            color: #fff;
            font-size: 1rem;
            font-weight: 400;
            margin-top: 30px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            background: rgb(130, 106, 251);
        }

        .form button:hover {
            background: rgb(88, 56, 250);
        }

        @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Gilroy;
        }

        .container {
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .container p {
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.3px;
            margin: 20px 0;
        }

        .container span {
            font-size: 12px;
        }


        .container a {
            color: #333;
            font-size: 13px;
            text-decoration: none;
            margin: 15px 0 10px;
        }


        .container button {
            background-color: #2F99A3;
            color: #fff;
            font-size: 12px;
            padding: 10px 45px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-top: 10px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(34, 31, 31, 0.3);
            transition: 0.5s ease;

        }


        .container button.hidden {
            background-color: #2F99A3;
            border-color: #fff;

        }

        .container button:hover {
            background-color: black;
            transform: scale(1.1);
        }

        .container form {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            height: 100%;
        }

        .container input {
            background-color: #eee;
            border: none;
            display: flex;
            margin: 8px 0;
            padding: 10px 15px;
            font-size: 13px;
            border-radius: 8px;
            width: 100%;
            outline: none;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.active .sign-in {
            transform: translateX(100%);

        }

        .sign-up {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }


        .container.active .sign-up {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: move 0.6s;
        }

        @keyframes move {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }


        .social-icons {
            margin: 20px 0;
        }

        .social-icons a {
            border: 1px solid #ccc;
            border-radius: 20%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 3px;
            width: 40px;
            height: 40px;
            cursor: pointer;

            transition: 0.3s ease;
        }

        .social-icons a:hover {

            transform: translateY(-25%);
            background-color: #00bfff;
        }

        .toggle-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: all 0.6s ease-in-out;
            border-radius: 150px 0 0 100px;
            z-index: 1000;
        }

        .container.active .toggle-container {
            transform: translateX(-100%);
            border-radius: 0 150px 100px 0;
        }


        .toggle {

            height: 100%;
            background: #ffa500;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .container.active .toggle {
            transform: translateX(50%);
        }

        .toggle-panel {
            position: absolute;
            color: #fff;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 30px;
            text-align: center;
            top: 0;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .toggle-left {
            transform: translateX(-200%);
        }

        .container.active .toggle-left {
            transform: translateX(0);
        }

        .toggle-right {
            right: 0;
            transform: translateX(0);
        }

        .container.active .toggle-right {
            transform: translateX(200%);
        }

        .toggle p {
            color: #fff;
        }





        /* Profile Icon in Header */
        .profile-icon img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            top: 3.5px;
            right: 20px;
        }

        /* Profile Modal */
        .profile-modal {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 300px;
            height: auto;
            background-color: #fff;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            transform: translateX(100%);
            position: absolute;
        }

        .profile-modal-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
            object-fit: cover;
        }

        .profile-details p {
            font-size: 14px;
            margin: 10px 0;
        }

        .profile-details input,
        .profile-details select {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #saveProfileBtn {
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }

        #saveProfileBtn:hover {
            background-color: #45a049;
        }

        .close-profile-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
        }

        /* Animation when the profile modal opens */
        .profile-modal.open {
            transform: translateX(0);
        }






        .hero7 {
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #d7d3e2;
            /* Light cyan for hero section background */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 1425px;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;

        }

        /* Basic styling for the container */
        .carousel-container {
            width: 100%;
            max-width: 1600px;
            /* Adjust to control maximum width */
            margin: 40px 40px;
            /* Center the carousel */
            position: relative;
            overflow: hidden;
            /* Hide overflow */
            background-color: #F7FFFF;
            /* Blue background color */
            padding: 20px;
            border-radius: 15px;
            margin-left: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Optional: Rounded corners */
        }

        /* To ensure a 4:3 aspect ratio, we use padding-top to match the height */
        .carousel-images {
            position: relative;
            width: 100%;
            padding-top: 75%;
            /* 75% height of the width gives a 4:3 aspect ratio */
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
        }

        /* Each carousel item */
        .carousel-item {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            /* Hide all items initially */
        }

        /* Show only the active carousel item */
        .carousel-item.active {
            display: block;
        }

        /* Styling for images */
        .carousel-item img {
            width: 100%;
            height: 100%;
            /* Force image to take up full width and height */
            object-fit: cover;
            /* Ensure the image covers the container, cropping if needed */
            position: absolute;
            top: 0;
            left: 0;
        }

        /* Heading styling */
        .carousel-heading {
            position: absolute;
            top: 20px;
            /* Position 20px from the top */
            left: 20px;
            /* Position 20px from the left */
            color: white;
            /* White color for better contrast */
            font-size: 24px;
            /* Adjust the font size as needed */
            font-weight: bold;

            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            /* Add shadow for better readability */
        }

        /* Button styling */
        .explore-btn {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: black;
            /* Yellow button background */
            color: white;
            /* Black text */
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        /* Button hover effect */
        .explore-btn:hover {
            color: white;
            background-color: #1668e3;
            transition: 0.3s;
            /* Darker yellow on hover */
        }



        /* Responsive design */
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                align-items: center;
            }

            .hero-text {
                max-width: 100%;
                text-align: center;
            }

            .hero-image {

                justify-content: center;
                margin-top: 20px;
            }

            .hero-image img {
                max-width: 80%;
            }
        }



        .page {
            border-radius: 20px;
            padding: 55px;
            background-color: #ffe4e1;
            width: 1425px;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .booking-form-container {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1600px;
            margin: auto;
        }

        .booking-form {
            width: 100%;
            max-width: 1500px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .form-group7 {
            flex: 1 1 120px;
            display: flex;
            flex-direction: column;
        }

        .form-group7 label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group7 input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .hotelbook-button {
            background-color: #000000;
            /* Cyan for button */
            color: white;
            border: none;
            margin-top: 22px;
            margin-bottom: 22PX;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .hotelbook-button:hover {
            color: white;
            background-color: #1668e3;
            transition: 0.3s;
        }






        /* start here  place section range 140 to 322 */
        /* Popular Attractions Section */
        .popular-attractions {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff7ff;
            padding: 40px;
            border-radius: 20px;
            color: black;
            width: 1425px;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .popular-attractions h2 {
            color: black;
            text-align: left;
            font-size: 28px;
            margin-bottom: 20px;
        }

        /*city tabs section*/
        .city-tabs {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .city-tabs button {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            color: black;
            font-weight: bold;
        }

        .city-tabs button.active {
            background-color: black;
            color: #fff;
        }

        /* City sections */
        .city-section {
            display: none;
            /* Hide all sections by default */
            margin: 20px;
        }

        /* Attraction Cards */
        .attractions-list {
            display: flex;
            gap: 20px;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .attraction-card,
        .cta-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            flex: 1;
            max-width: 22%;
            transition: transform 0.3s ease;
            /* Smooth zoom effect */
        }

        /* Zoom effect on hover for cards */
        .attraction-card:hover,
        .cta-card:hover {
            transform: scale(1.05);
            /* Zoom in the card slightly */
        }

        /* Attraction Card Images */
        .attraction-card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            transition: transform 0.3s ease;
            /* Smooth zoom effect for image */
        }

        /* Zoom effect on hover for images */
        .attraction-card:hover img {
            transform: scale(1.1);
            /* Zoom in the image slightly */
        }

        .attraction-info {
            padding: 15px;
        }

        .attraction-info-rating {
            display: flex;
            justify-content: space-between;
            color: #4a4a4a;
            margin-bottom: 10px;
            font-size: 0.99rem;
        }

        .attraction-info-rating span:first-child {
            background-color: black;
            padding: 4px;
            border-radius: 8px;
            color: white;
            margin-top: -7px;
            font-weight: bold;
        }

        .attraction-info h3 {
            font-size: 1.16rem;
            color: black;
        }

        .attraction-info h3:hover {
            color: #007bff;

        }

        .attraction-info p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 15px;
        }

        /* Rating Styles */
        .rating {
            color: #0077b6;
            font-weight: bold;
            margin-top: 5px;
        }

        .rating span {
            display: block;
        }

        /* CTA Card */

        .cta-card:hover {
            transform: scale(1.05);
        }

        .cta-card img {
            padding: -1px;
            width: 100%;
            height: 180px;
        }

        .cta-content {
            text-align: center;
        }

        .cta-card h3 {
            margin-top: 27px;
            color: black;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .cta-card button {
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .cta-card button:hover {
            background-color: #0077b6;
            transition: 0.3s;
        }

        /* hidden Attractions Section */
        .hidden-attractions {
            background-color: #FFFFF7;
            padding: 40px;
            border-radius: 20px;
            color: black;
            margin-bottom: 20px;
            width: 1425px;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .hidden-attractions h2 {
            color: black;
            text-align: left;
            font-size: 28px;
            margin-bottom: 20px;
        }

        /*city tabs section*/
        .hiddencity-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .hiddencity-tabs button {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            color: black;
            font-weight: bold;
        }

        .hiddencity-tabs button.active {
            background-color: black;
            color: #fff;
        }

        /* City sections */
        .hiddencity-section {
            display: none;
            /* Hide all sections by default */
            margin: 20px;
        }

        /*hotel Attractions Section */
        .hotel-attractions {
            background-color: #F7FFFF;
            padding: 40px;
            border-radius: 20px;
            color: black;
            width: 1425px;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .hotel-attractions h2 {
            color: black;
            text-align: left;
            font-size: 28px;
            margin-bottom: 20px;
        }

        /* City Tabs Section */
        .hotelcity-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .hotelcity-tabs button {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            color: black;
            font-weight: bold;
        }

        .hotelcity-tabs button.active {
            background-color: black;
            color: #fff;
        }


        /* City sections */
        .hotelcity-section {
            display: none;
            /* Hide all sections by default */
            margin: 20px;
        }

        .guide {
            background-color: #fff7ff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 60px;
            border-radius: 20px;

            color: black;
            width: 1425px;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .container2 {
            border-radius: 10px;
            background-color: #E8E8E8;
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .search {
            margin-top: 20px;
        }

        #location {
            padding: 12px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            width: 60%;
            margin-right: 10px;
        }

        #searchButton {
            padding: 10px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            background-color: #0072ff;
            color: #fff;
            cursor: pointer;
        }

        #searchButton:hover {
            background-color: #92BAD5;
        }

        .weather-info {
            background-color: #DFC57B;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;


        }

        .weather-info h2 {
            margin: 0;
            font-size: 2em;
        }

        .weather-info p {
            font-size: 1.2em;
            margin: 5px 0;
        }

        .weather-info img {
            width: 100px;
            height: 100px;
        }

        section {
            padding: 5px;
            color: #010001;
        }

        section h2 {
            text-align: center;
            font-size: 23px;
            margin-top: 20px;

        }

        form {
            max-width: 600px;
            margin: 0 auto;

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

        .guide button {

            background-color: #000000;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 60px;
            margin-bottom: 40px;
            margin-top: 20px;
        }

        .guide button:hover {
            background-color: #0077b6;
            color: white;
            transition: 0.3s;
        }

        button {
            background-color: #000000;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: gainsboro;
            color: black;

        }


        /* Basic footer styling */
        footer {
            border-radius: 20px;
            background-color: white;
            padding: 40px 0;
            font-family: Arial, sans-serif;
            text-align: center;
            width: 1425px;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    <!-- Loader container -->
    <div id="loading-bar-spinner" class="spinner">
        <div class="spinner-icon"></div>
    </div>
    <header>
        <div class="logo">
            <a href="#"><img src="./All-photos/logoindex.jpeg" alt="logo"></a>
        </div>

        <div class="mainsearch">
            <input type="text" id="location" placeholder="Search here" required>
            <button class="mainsearchbutton">Search</button>
        </div>

        <div class="header-title"></div>
        <button id="headerRegisterBtn" class="sign-in-btn">Register</button>
        <button id="hiddenGemsBtn" class="sign-in-btn">
            <nav>
                <ul>
                    <li><a href="hiddenGems.html">Hidden Gems</a></li>
                </ul>
            </nav>
        </button>
        <button id="hotelsBtn" class="sign-in-btn">
            <nav>
                <ul>
                    <li><a href="explorehotels.html">Hotels</a></li>
                </ul>
            </nav>
        </button>
        <button id="weatherBtn" class="weather-btn">
            <nav>
                <ul>
                    <li><a href="https://www.accuweather.com">Weather</a></li>
                </ul>
            </nav>
        </button>
        <button id="contactBtn" class="contact-btn">Chat with us</button>
        <div id="profileIcon" class="profile-icon">
            <img src="https://static.vecteezy.com/system/resources/previews/010/260/479/non_2x/default-avatar-profile-icon-of-social-media-user-in-clipart-style-vector.jpg"
                alt="Profile Icon">
        </div>
    </header>
    <div class="banner">
        <video autoplay loop muted plays-inline>
            <source src="./All-videos/websiteVideo 1 home.mp4" type="video/mp4">
        </video>

        <div class="content">
            <h1>Discover Amazing Places</h1>
            <p>Find great deals on hotels and breathtaking tours all around the world.</p>
            <div>
                <button class="button">
                    <nav>
                        <ul>
                            <li><a href="#page">Explore Now</a></li>
                        </ul>
                    </nav>
                </button>
            </div>
        </div>
    </div>


    <!-- register Modal -->
    <div id="signInModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="container" id="container">
                <div class="form-container sign-up">
                <form action="register.php" method="POST">
    <h1>Create Account</h1>
    <div class="social-icons">
        <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
        <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
        <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
    </div>
    <span>or use your email for registration</span>
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Sign Up</button>
</form>
                </div>
                <!-- SIGN-IN MODEL -->
                
                <div class="form-container sign-in">
                    <form action="signin.php" method="POST">
                        <h1>Sign In</h1>
                        <div class="social-icons">
                            <a href="https://www.freepnglogos.com/uploads/official-linkedin-logo----17.png" class="icon">
                                <i class="fa-brands fa-google-plus-g"></i>
                            </a>
                            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <span>or use your email password</span>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <a href="#">Forget Your Password?</a>
                        <button type="submit">Sign In</button>
                    </form>
                </div>
                <div class="toggle-container">
                    <div class="toggle">
                        <div class="toggle-panel toggle-left">
                            <h1>Welcome Back!</h1>
                            <p>Enter your personal details</p>
                            <button class="hidden" id="login">Sign In</button>
                        </div>
                        <div class="toggle-panel toggle-right">
                            <h1>Hello, Friend!</h1>
                            <p>Register with your personal details </p>
                            <button class="hidden" id="register">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="script2.js"></script>
        </div>
    </div>

    <!-- Contact Modal -->
    <div id="contactModal" class="modal">
        <div class="modal-content">
            <span class="close-btn contact-close-btn">&times;</span>
            <section id="booking">
                <h2>Booking and Reservation</h2>
                <form id="bookingForm">
                    <fieldset>
                        <legend>Book Your Travel</legend>
                        <label for="destination">Destination:</label>
                        <input type="text" id="destination" name="destination" required>

                        <label for="date">Travel Date:</label>
                        <input type="date" id="date" name="date" required>

                        <label for="type">Travel Type:</label>
                        <select id="type" name="type" required>
                            <option value="bus">Bus</option>
                            <option value="bus">Cabs</option>
                            <option value="plane">Airplane</option>
                        </select>

                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <button type="submit">Book Now</button>
                    </fieldset>
                </form>
            </section>
            <!--
                <ul class="contact-links">
                    <li><a href="#" class="contact-link">Privacy Statement</a></li>
                    <li><a href="#" class="contact-link">Terms & Conditions</a></li>
                    <li><a href="https://i.im.ge/2024/09/13/fzUSWG.Screenshot-2024-09-13-020540.png"
                        class="contact-link">About Tech-thrive.com</a></li>
                </ul>
            -->
        </div>
    </div>
    <script src="script.js"></script>

    <!-- weather Modal 
    <div id="weatherModal" class="modal">
        <div class="modal-content">
            <span class="close-btn weather-close-btn">&times;</span>

            <div class="container2">

                <h1>🔴 Live Weather Dashboard</h1>

                <main>
                    <div class="search">
                        <input type="text" id="location" placeholder="Enter city or state" required>
                        <button id="searchButton">Get Weather</button>
                    </div>
                    <div class="weather-info" id="weatherInfo">
                         Weather information will be displayed here 
                    </div>
                </main>
            </div>
            <script src="script.js"></script>

        </div>
    -->
    </div>



    <script src="script.js"></script>




    <section class="page" id="page">
        <div class="booking-form-container">
        <form class="booking-form" action="process_booking.php" method="POST">
        <div class="form-group7">
            <label for="destination">Where are you going?</label>
            <input type="text" id="destination" name="destination" placeholder="Enter destination" required>
        </div>
        <div class="form-group7">
            <label for="check-in">Check-in date</label>
            <input type="date" id="check-in" name="check_in" required>
        </div>
        <div class="form-group7">
            <label for="check-out">Check-out date</label>
            <input type="date" id="check-out" name="check_out" required>
        </div>
        <div class="form-group7">
            <label for="children">Number of children</label>
            <input type="number" id="children" name="children" min="0" value="0">
        </div>
        <div class="form-group7">
            <label for="adults">Number of adults</label>
            <input type="number" id="adults" name="adults" min="1" value="1">
        </div>
        <div class="form-group7">
            <label for="rooms">Number of rooms</label>
            <input type="number" id="rooms" name="rooms" min="1" value="1">
        </div>

        <button class="hotelbook-button" type="submit">Booking</button>
    </form>
        </div>
    </section>

    <!-- Profile Modal Section -->
    <div id="profileModal" class="profile-modal">
        <div class="profile-modal-content">
            <span class="close-profile-btn">&times;</span>
            <div class="profile-header">
                <h2>User Profile</h2>
                <img id="profilePicPreview" src="default-profile-pic.png" alt="Profile Picture" class="profile-pic">
                <input type="file" id="profilePicUpload" accept="image/*" style="display: none;">
                <button id="changeProfilePicBtn">Change Profile Picture</button>
            </div>
            <form id="profileForm" class="profile-details">
                <p><strong>Name:</strong> <input type="text" id="userName" value="John Doe"></p>
                <p><strong>Email:</strong> <input type="email" id="userEmail" value="john.doe@example.com"></p>
                <p><strong>Phone:</strong> <input type="text" id="userPhone" value="+123456789"></p>
                <p><strong>Age:</strong> <input type="number" id="userAge" value="29"></p>
                <p><strong>Gender:</strong>
                    <select id="userGender">
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </p>
                <button type="button" id="saveProfileBtn">Save Changes</button>
            </form>
        </div>
    </div>

    </div>
    <div class="hero7">
        <div class="carousel-container" id="carousel1">
            <div class="carousel-images">
                <!-- Each image has a button below it -->
                <div class="carousel-item active">
                    <img src="./All-photos/newyorkimage.webp" alt="Image 1">
                    <h2 class="carousel-heading">1. New York</h2> <!-- Heading for Image 1 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/capetownimage.jpg" alt="Image 2">
                    <h2 class="carousel-heading">2. Cape Town</h2> <!-- Heading for Image 2 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/berlinimage.jpg" alt="Image 3">
                    <h2 class="carousel-heading">3. Berlin</h2> <!-- Heading for Image 3 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/londonimage.jpg" alt="Image 4">
                    <h2 class="carousel-heading">4. London</h2> <!-- Heading for Image 4 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/madridimage.jpg" alt="Image 5">
                    <h2 class="carousel-heading">5. Madrid</h2> <!-- Heading for Image 5 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/mexicocityimage.jpg" alt="Image 6">
                    <h2 class="carousel-heading">6. Mexico City</h2> <!-- Heading for Image 6 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/liverpoolimage.jpg" alt="Image 7">
                    <h2 class="carousel-heading">7. Liverpool</h2> <!-- Heading for Image 7 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/tokyoimage.jpg" alt="Image 8">
                    <h2 class="carousel-heading">8. Tokyo</h2> <!-- Heading for Image 8 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/parisimage.jpg" alt="Image 9">
                    <h2 class="carousel-heading">9. Paris</h2> <!-- Heading for Image 9 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/mumbaiimage.jpg" alt="Image 10">
                    <h2 class="carousel-heading">10. Mumbai</h2> <!-- Heading for Image 10 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/lisbonimage.jpg" alt="Image 11">
                    <h2 class="carousel-heading">11. Lisbon</h2> <!-- Heading for Image 11 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/chicagoimage.jpg" alt="Image 12">
                    <h2 class="carousel-heading">12. Chicago</h2> <!-- Heading for Image 12 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/SaoPauloimage.jpg" alt="Image 13">
                    <h2 class="carousel-heading">13. São Paulo</h2> <!-- Heading for Image 13 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/LosAngelesimage.jpg" alt="Image 14">
                    <h2 class="carousel-heading">14. Los Angeles</h2> <!-- Heading for Image 14 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Amsterdamimage.jpg" alt="Image 15">
                    <h2 class="carousel-heading">15. Amsterdam</h2> <!-- Heading for Image 15 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Lagosimage.jpg" alt="Image 16">
                    <h2 class="carousel-heading">16. Lagos</h2> <!-- Heading for Image 16 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Melbourneimage.jpg" alt="Image 17">
                    <h2 class="carousel-heading">17. Melbourne</h2> <!-- Heading for Image 17 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Singaporeimage.jpg" alt="Image 18">
                    <h2 class="carousel-heading">18. Singapore</h2> <!-- Heading for Image 18 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Bangkokimage.jpg" alt="Image 19">
                    <h2 class="carousel-heading">19. Bangkok</h2> <!-- Heading for Image 19 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Sydneyimage.jpg" alt="Image 20">
                    <h2 class="carousel-heading">20. Sydney</h2> <!-- Heading for Image 20 -->
                    <button class="explore-btn">Explore Now</button>
                </div>

                <!-- Add more carousel-item divs for the remaining images -->
            </div>
        </div>

        <div class="carousel-container" id="carousel2">
            <div class="carousel-images">
                <!-- Each image has a button below it -->
                <div class="carousel-item active">
                    <img src="./All-photos/Cartagena, Colombiaimage.jpg" alt="Image 1">
                    <h2 class="carousel-heading">1. Cartagena, Colombia</h2> <!-- Heading for Image 1 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Chiang Mai, Thailandimage.jpg" alt="Image 2">
                    <h2 class="carousel-heading">2. Chiang Mai, Thailand
                    </h2> <!-- Heading for Image 2 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Copenhagen, Denmarkimage.jpg" alt="Image 3">
                    <h2 class="carousel-heading">3. Copenhagen, Denmark</h2> <!-- Heading for Image 3 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Doha, Qatarimage.jpg" alt="Image 4">
                    <h2 class="carousel-heading">4. Doha, Qatar</h2> <!-- Heading for Image 4 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Florence, Italy image.jpg" alt="Image 5">
                    <h2 class="carousel-heading">5. Florence, Italy</h2> <!-- Heading for Image 5 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Hanoi, Vietnam image.jpg" alt="Image 6">
                    <h2 class="carousel-heading">6. Hanoi, Vietnam</h2> <!-- Heading for Image 6 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Hong Kong, China image.jpg" alt="Image 7">
                    <h2 class="carousel-heading">7. Hong Kong, China</h2> <!-- Heading for Image 7 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Jaipur, India image.jpg" alt="Image 8">
                    <h2 class="carousel-heading">8. Jaipur, India</h2> <!-- Heading for Image 8 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Kyoto, Japan image.jpg" alt="Image 9">
                    <h2 class="carousel-heading">9. Kyoto, Japan</h2> <!-- Heading for Image 9 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Ljubljana, Slovenia image.jpg" alt="Image 10">
                    <h2 class="carousel-heading">10. Ljubljana, Slovenia</h2> <!-- Heading for Image 10 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Muscat, Oman image.jpg" alt="Image 11">
                    <h2 class="carousel-heading">11. Muscat, Oman</h2> <!-- Heading for Image 11 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Porto, Portugal image.jpg" alt="Image 12">
                    <h2 class="carousel-heading">12. Porto, Portugal</h2> <!-- Heading for Image 12 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Prague, Czech Republic image.jpg" alt="Image 13">
                    <h2 class="carousel-heading">13. Prague, Czech Republic</h2> <!-- Heading for Image 13 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Québec City, Canada image.jpg" alt="Image 14">
                    <h2 class="carousel-heading">14. Québec City, Canada</h2> <!-- Heading for Image 14 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Queenstown, New Zealand image.jpg" alt="Image 15">
                    <h2 class="carousel-heading">15. Queenstown, New Zealand</h2> <!-- Heading for Image 15 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Quito, Ecuador image.jpg" alt="Image 16">
                    <h2 class="carousel-heading">16. Quito, Ecuador</h2> <!-- Heading for Image 16 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Rio de Janeiro, Brazil image.jpeg" alt="Image 17">
                    <h2 class="carousel-heading">17. Rio de Janeiro, Brazil</h2> <!-- Heading for Image 17 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Rome, Italy image.jpg" alt="Image 18">
                    <h2 class="carousel-heading">18. Rome, Italy</h2> <!-- Heading for Image 18 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/St Petersburg, Russia image.jpg" alt="Image 19">
                    <h2 class="carousel-heading">19. St Petersburg, Russia</h2> <!-- Heading for Image 19 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <div class="carousel-item">
                    <img src="./All-photos/Seville, Spain image.jpg" alt="Image 20">
                    <h2 class="carousel-heading">20. Seville, Spain</h2> <!-- Heading for Image 20 -->
                    <button class="explore-btn">Explore Now</button>
                </div>
                <!-- Add more carousel-item divs for the remaining images -->
            </div>
        </div>
    </div>

    <section class="popular-attractions" id="explorenow">
        <h2> <big>Popular Attractions in India<big /></h2>
        <section class="city-tabs">
            <button class="tab-button active" onclick="showSection('chandigarh')">Chandigarh</button>
            <button class="tab-button" onclick="showSection('Jammu and Kashmir')">Jammu and Kashmir</button>
            <button class="tab-button" onclick="showSection('Uttarakhand')">Uttarakhand</button>
            <button class="tab-button" onclick="showSection('Rajasthan')">Rajasthan</button>
            <button class="tab-button" onclick="showSection('Uttar Pradesh')">Uttar Pradesh</button>

        </section>


        <!-- Chandigarh Section start here -->
        <section id="chandigarh" class="city-section">
            <h2>Chandigarh Attractions</h2>
            <div class="attractions-list">
                <!-- Chandigarh Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Japanese-Garden-image.jpg" alt="Japanese Garden">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>3.9/5</span>
                            <span>507 reviews</span>
                        </div>
                        <h3>Japanese Garden</h3>
                        <p>Sector 31 A, Sector 31, Chandigarh, 160030, India</p>

                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/nana sahib gurudwara image.jpg" alt="Nada Sahib Gurudwara">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.1/5</span>
                            <span>489 reviews</span>
                        </div>
                        <h3>Nada Sahib Gurudwara</h3>
                        <p>Nada sahib, Panchkula, Haryana 134109, India</p>

                    </div>
                </div>

                <div class="attraction-card">
                    <img src="./All-photos/Sukhna-Lake-image.webp" alt=" Sukhna Lake">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>3.6/5</span>
                            <span>677 reviews</span>
                        </div>
                        <h3> Sukhna Lake</h3>
                        <p>Sector 1, Chandigarh 160001, India</p>

                    </div>
                </div>


                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/exploremoredestinationsimage.jpg">
                        <h3>Explore Destinations</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="popularAttractions.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more Chandigarh attractions end here -->

        </section>

        <!-- Jammu and Kashmir Section start here-->
        <section id="Jammu and Kashmir" class="city-section" style="display:none;">
            <h2>Jammu and Kashmir Attractions</h2>
            <div class="attractions-list">
                <!-- Jammu and Kashmir Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Srinagar image.jpg" alt="Ludhiana Attraction">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.5/5</span>
                            <span>907 reviews</span>
                        </div>
                        <h3>Srinagar</h3>
                        <p>Gupkar Road, Srinagar-190001, India</p>

                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/leh ladakh image.jpg" alt="Leh">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.3/5</span>
                            <span>897 reviews</span>
                        </div>
                        <h3>Leh (Ladakh)</h3>
                        <p>Leh, 194101, Ladakh, Jammu and Kashmir, India</p>
                    </div>
                </div>

                <div class="attraction-card">
                    <img src="./All-photos/Gulmarg image.jpg" alt="Gulmarg">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>3.8/5</span>
                            <span>455 reviews</span>
                        </div>
                        <h3>Gulmarg</h3>
                        <p>Gulmarg, Kashmir, 193403, Jammu and Kashmir, India</p>
                    </div>
                </div>


                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/exploremoredestinationsimage.jpg">
                        <h3>Explore Destinations</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="popularAttractions.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more Jammu and Kashmir attractions end here -->

        </section>

        <!--Uttarakhand Section -->
        <section id="Uttarakhand" class="city-section" style="display:none;">
            <h2>Uttarakhand Attractions</h2>
            <div class="attractions-list">
                <!-- Uttarakhand Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Badrinath_Temple_image.JPG" alt="Manali Attraction">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.6/5</span>
                            <span>1,007 reviews</span>
                        </div>
                        <h3>Badrinath</h3>
                        <p>Badrinath temple, 246422, Uttarakhand, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/kedarnath image.jpg" alt="Kedarnath Attraction">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.8/5</span>
                            <span>4,109 reviews</span>
                        </div>
                        <h3>Kedarnath</h3>
                        <p>Kedarnath temple, 246445, Uttarakhand, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/rishikesh image.avif" alt="Rishikesh Attraction">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.3/5</span>
                            <span>6,107 reviews</span>
                        </div>
                        <h3>Rishikesh</h3>
                        <p>Rishikesh, 249201, Dehradun, Uttarakhand, India</p>
                    </div>
                </div>
                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/exploremoredestinationsimage.jpg">
                        <h3>Explore Destinations</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="popularAttractions.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more Manali attractions here -->

        </section>
        <!--Rajasthan Section -->
        <section id="Rajasthan" class="city-section" style="display:none;">
            <h2>Rajasthan Attractions</h2>
            <div class="attractions-list">
                <!-- Rajasthan Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/jaisalmer image.jpg">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.1/5</span>
                            <span>3,197 reviews</span>
                        </div>
                        <h3>Jaisalmer</h3>
                        <p>District-Jaisalmer, 345001, Rajasthan, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/jodhpur image.avif" alt="Kedarnath Attraction">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>3.8/5</span>
                            <span>2,107 reviews</span>
                        </div>
                        <h3>Jodhpur</h3>
                        <p>District-Jodhpur, 342001, Rajasthan, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/ranthambore-national-park image.jpg" alt="Rishikesh Attraction">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.6/5</span>
                            <span>5,137 reviews</span>
                        </div>
                        <h3>Ranthambore National Park</h3>
                        <p>Ranthambhore Road, Sawai Madhopur, Rajasthan, 322021, India</p>
                    </div>
                </div>
                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/exploremoredestinationsimage.jpg">
                        <h3>Explore Destinations</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="popularAttractions.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more Rajasthan attractions here -->
        </section>
        <!--Uttar Pradesh Section -->

        <section id="Uttar Pradesh" class="city-section" style="display:none;">
            <h2>Uttar Pradesh Attractions</h2>
            <div class="attractions-list">
                <!-- Uttar Pradesh Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/lucknow image.jpg">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.1/5</span>
                            <span>8,147 reviews</span>
                        </div>
                        <h3>Lucknow</h3>
                        <p>District-Lucknow, Uttar Pradesh, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <a><img src="./All-photos/vrandawan image.png"></a>
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.4/5</span>
                            <span>4,003 reviews</span>
                        </div>
                        <h3>Vrindavan</h3>
                        <p>Vrindavan Mathura, 281121, Uttar Pradesh, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/fatehpur-sikri--agra- image.jpg" alt="Fatehpur Sikri Attraction">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.6/5</span>
                            <span>6,187 reviews</span>
                        </div>
                        <h3>Fatehpur Sikri</h3>
                        <p>Fatehpur Sikri Agra, 283110, Uttar Pradesh, India</p>
                    </div>
                </div>
                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/exploremoredestinationsimage.jpg">
                        <h3>Explore Destinations</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="popularAttractions.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more Rajasthan attractions here -->

        </section>
        <script src="scripts.js"></script>
    </section>

    <section class="hidden-attractions" id="hiddenlink">

        <h2><big>Hidden Gems in India</big></h2>
        <section class="hiddencity-tabs">
            <button class="tab-button active" onclick="showSectionH('kakra')">Himachal Pradesh</button>
            <button class="tab-button" onclick="showSectionH('uttarakhand')">Uttarakhand</button>
            <button class="tab-button" onclick="showSectionH('arunachal-pradesh')">Arunachal Pradesh</button>
            <button class="tab-button" onclick="showSectionH('maharashtra')">Maharashtra</button>
            <button class="tab-button" onclick="showSectionH('assam')">Assam</button>

        </section>

        <!-- kakra Section start here -->
        <section id="kakra" class="hiddencity-section">
            <h2>Himachal Pradesh Attractions</h2>
            <div class="attractions-list">
                <!-- kakra Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Toral Cafe &restaurant image.jpg" alt="Toral Cafe &restaurant">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.0/5</span>

                            <span>167 reviews</span>
                        </div>
                        <h3>Toral Cafe &restaurant</h3>
                        <p>Thatri, Khanyara, Himachal Pradesh 176218, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/Kharota hill view point image.jpg" alt="Kharota hill view point">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.5/5</span>
                            <span>483 reviews</span>
                        </div>
                        <h3>Kharota hill view point</h3>
                        <p>Kharota, Khanyara Rd Lunta, Kharota 176218, India</p>
                    </div>
                </div>

                <div class="attraction-card">
                    <img src="./All-photos/Dharamkot image.jpg" alt="Dharamkot">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.2/5</span>
                            <span>294 reviews</span>
                        </div>
                        <h3>Dharamkot</h3>
                        <p>Dharamkot, District Moga, Punjab, 142042, India</p>
                    </div>
                </div>

                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/more destinations image.webp">
                        <h3>More Hidden Gems</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="hiddenGems.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more kakra attractions end here -->

        </section>

        <!-- Uttarakhand Section start here-->
        <section id="uttarakhand" class="hiddencity-section" style="display:none;">
            <h2>Uttarakhand Attractions</h2>
            <div class="attractions-list">
                <!-- Uttarakhand Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Chopta, Uttarakhand image.jpg" alt="Chopta, Uttarakhand">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.2/5</span>
                            <span>203 reviews</span>
                        </div>
                        <h3>Chopta, Uttarakhand</h3>
                        <p>Chopta, District Chamoli, 246453, Uttarakhand, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/Kanatal, Uttarakhand image.jpg" alt="Kanatal, Uttarakhand">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.6/5</span>
                            <span>107 reviews</span>
                        </div>
                        <h3>Kanatal, Uttarakhand</h3>
                        <p>Kanatal, District-Tehri Garhwal, 249145, Uttarakhand, India</p>
                    </div>
                </div>

                <div class="attraction-card">
                    <img src="./All-photos/Munsiyari, Uttarakhand image.jpg" alt="Munsiyari, Uttarakhand">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.4/5</span>
                            <span>157 reviews</span>
                        </div>
                        <h3>Munsiyari, Uttarakhand</h3>
                        <p>Munsiyari, District-Pithoragarh, 262554, Uttarakhand, India</p>
                    </div>
                </div>


                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/more destinations image.webp">
                        <h3>More Hidden Gems</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="hiddenGems.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more Uttarakhand attractions end here -->

        </section>

        <!-- Arunachal Pradesh Section -->
        <section id="arunachal-pradesh" class="hiddencity-section" style="display:none;">
            <h2>Arunachal Pradesh Attractions</h2>
            <div class="attractions-list">
                <!-- Arunachal Pradesh Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Pankang Teng Tso Lake image.webp" alt="Pankang Teng Tso Lake">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.5/5</span>
                            <span>374 reviews</span>
                        </div>
                        <h3>Pankang Teng Tso Lake</h3>
                        <p>Tawang Town, Tawang, Arunachal Pradesh, 160002, India</p>
                    </div>
                </div>
                <!-- Arunachal Pradesh Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Sangti Valley image.webp" alt="Sangti Valley">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.1/5</span>
                            <span>208 reviews</span>
                        </div>
                        <h3>Sangti Valley</h3>
                        <p>Dirang, 790101, Arunachal Pradesh, India</p>
                    </div>
                </div>
                <!--Arunachal Pradeshi Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Bumla Pass image.webp" alt="Bumla Pass">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.2/5</span>
                            <span>135 reviews</span>
                        </div>
                        <h3>Bumla Pass</h3>
                        <p>Village: Sangti, Dirang, Arunachal Pradesh, 790101 India</p>
                    </div>
                </div>

                <!-- Add more Arunachal Pradesh attractions here -->
                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/more destinations image.webp">
                        <h3>More Hidden Gems</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="hiddenGems.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>

            </div>
        </section>
        <!-- Maharashtra Section -->
        <section id="maharashtra" class="hiddencity-section" style="display:none;">
            <h2>Maharashtra Attractions</h2>
            <div class="attractions-list">
                <!-- Maharashtra Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/The Refreshing Greens of Matheran image.jpg"
                        alt="The Refreshing Greens of Matheran">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.6/5</span>
                            <span>457 reviews</span>
                        </div>
                        <h3>The Refreshing Greens of Matheran</h3>
                        <p>The Refreshing Greens of Matheran, 410102, Maharashtra, India</p>
                    </div>
                </div>



                <div class="attraction-card">
                    <img src="./All-photos/The longest uninterrupted beach Tarkarli image.jpg"
                        alt="The longest uninterrupted beach Tarkarli">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.2/5</span>
                            <span>387 reviews</span>
                        </div>
                        <h3>The longest uninterrupted beach Tarkarli</h3>
                        <p>The Karli River and the Arabian Sea in Tarkarli, Sindhudurg , 416606, Maharashtra, India</p>
                    </div>
                </div>

                <div class="attraction-card">
                    <img src="./All-photos/The Cascading Falls of Bhandardara image.jpg"
                        alt="The Cascading Falls of Bhandardara">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.0/5</span>
                            <span>378 reviews</span>
                        </div>
                        <h3>The Cascading Falls of Bhandardara</h3>
                        <p>At a distance of 500 m from Bhandardara Bus Stop, Near Wilson Dam, Maharashtra, India</p>
                    </div>
                </div>
                <!-- Add more Maharashtra attractions here -->
                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/more destinations image.webp">
                        <h3>More Hidden Gems</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="hiddenGems.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>

            </div>
        </section>
        <!-- Assam Section -->
        <section id="assam" class="hiddencity-section" style="display:none;">
            <h2>Assam Attractions</h2>
            <div class="attractions-list">
                <!-- Assam Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Sukapha Samannay Kshetra image.webp" alt="Sukapha Samannay Kshetra">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.3/5</span>
                            <span>367 reviews</span>
                        </div>
                        <h3>Sukapha Samannay Kshetra</h3>
                        <p>Mohbandha Near Dergaon, Jorhat, 785001, Assam, India</p>
                    </div>
                </div>

                <div class="attraction-card">
                    <img src="./All-photos/Panimur Waterfall image.webp" alt="Panimur Waterfall">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.5/5</span>
                            <span>212 reviews</span>
                        </div>
                        <h3>Panimur Waterfall</h3>
                        <p>Umrangso, District Dima Hasao, At a distance of 120 km away from Haflong, 788819, Assam,
                            India</p>
                    </div>
                </div>

                <div class="attraction-card">
                    <img src="./All-photos/Parvati Pahar image.webp" alt="Parvati Pahar">
                    <div class="attraction-info">
                        <div class="attraction-info-rating">
                            <span>4.0/5</span>
                            <span>435 reviews</span>
                        </div>
                        <h3>Parvati Pahar</h3>
                        <p>At a distance of 80 Km from Guwahati Railway station and 55 Km from Guwahati Airport, Boko,
                            Kamrup, 781123, Assam, India</p>
                    </div>
                </div>
                <!-- Add more Assam attractions here -->
                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/more destinations image.webp">
                        <h3>More Hidden Gems</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="hiddenGems.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>

            </div>
        </section>
        <!-- Add similar sections for Panchkula, Hong Kong, and Seoul -->
        <script src="scripts.js"></script>
    </section>

    <section class="hotel-attractions" id="hotellink">
        <h2><big>Popular Hotels in India</big></h2>
        <section class="hotelcity-tabs">
            <button class="tab-button active" onclick="showSectionhotel('place1')">Chandigarh</button>
            <button class="tab-button" onclick="showSectionhotel('place2')">Lucknow</button>
            <button class="tab-button" onclick="showSectionhotel('place3')">Jaipur</button>
            <button class="tab-button" onclick="showSectionhotel('place4')">Manali</button>
            <button class="tab-button" onclick="showSectionhotel('place5')">Dehradun</button>

        </section>

        <!-- Chandigarh Section start here -->
        <section id="place1" class="hotelcity-section">
            <h2>Chandigarh Hotels</h2>
            <div class="attractions-list">
                <!-- Chandigarh Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Hotel City Plaza 7 image.jpg" alt="Hotel City Plaza 7">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.4/5</span>
                            <span>4,357 reviews</span>
                        </div>
                        <h3>Hotel City Plaza 7</h3>
                        <p>Sector 7-C, Madhya Marg, 160036 Chandīgarh, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/Wyndham Chandigarh Mohali image.webp" alt="Wyndham Chandigarh Mohali">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.6/5</span>
                            <span>3,457 reviews</span>
                        </div>
                        <h3>Wyndham Chandigarh Mohali</h3>
                        <p>SECTOR 65 Phase 11 Opp. Mohali Golf Range, 160062 Chandīgarh, India</p>
                    </div>
                </div>

                <div class="attraction-card">
                    <img src="./All-photos/JW Marriott Hotel Chandigarh image.jpg" alt=" JW Marriott Hotel Chandigarh">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.1/5</span>
                            <span>1,289 reviews</span>
                        </div>
                        <h3>JW Marriott Hotel Chandigarh</h3>
                        <p>Plot no: 6, Sector 35-B, Dakshin Marg, 160035 Chandīgarh, India</p>
                    </div>
                </div>

                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/more hotels image.jpg">
                        <h3>Explore more Hotels</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="explorehotels.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more Chandigarh attractions end here -->
            </div>
        </section>

        <!-- place2 Section start here-->
        <section id="place2" class="hotelcity-section" style="display:none;">
            <h2>Lucknow Hotels</h2>
            <div class="attractions-list">
                <!-- place2 Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Novotel Lucknow Gomti Nagar image.jpg" alt="Novotel Lucknow Gomti Nagar">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.0/5</span>
                            <span>3,459 reviews</span>
                        </div>
                        <h3>Novotel Lucknow Gomti Nagar</h3>
                        <p>Viraj Khand Gomti Nagar, Gomti Nagar, 226010 Lucknow, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/Renaissance Lucknow Hotel image.webp" alt="Renaissance Lucknow Hotel
    ">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.6/5</span>
                            <span>4,556 reviews</span>
                        </div>
                        <h3>Renaissance Lucknow Hotel</h3>
                        <p>Vipin Khand, Gomti Nagar, Lucknow, 226010, India</p>
                    </div>
                </div>

                <div class="attraction-card">
                    <img src="./All-photos/Holiday Inn Lucknow Airport, an IHG Hotel image.jpeg"
                        alt="Holiday Inn Lucknow Airport, an IHG Hotel">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.6/5</span>
                            <span>6,187 reviews</span>
                        </div>
                        <h3>Holiday Inn Lucknow Airport, an IHG Hotel</h3>
                        <p>Kanpur Road, 226008 Lucknow, India</p>
                    </div>
                </div>


                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/more hotels image.jpg">
                        <h3>Explore more Hotels</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="explorehotels.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more Jammu and Kashmir attractions end here -->
            </div>
        </section>

        <!--place3 Section -->
        <section id="place3" class="hotelcity-section" style="display:none;">
            <h2>Jaipur Hotels</h2>
            <div class="attractions-list">
                <!-- place3 Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Jaipur Marriott Hotel image.avif" alt="Jaipur Marriott Hotel">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.3/5</span>
                            <span>7,340 reviews</span>
                        </div>
                        <h3>Jaipur Marriott Hotel</h3>
                        <p>Near Jawahar Circle, Ashram Marg,, 302015 Jaipur, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/Hilton Jaipur image.jpg" alt="Hilton Jaipur">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.0/5</span>
                            <span>8,105 reviews</span>
                        </div>
                        <h3>Hilton Jaipur</h3>
                        <p>Plot No. 42, Geejgarh House, Hawa Sadak, 302006 Jaipur, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/Radisson Hotel Jaipur City Center image.jpg"
                        alt="Radisson Hotel Jaipur City Center">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.4/5</span>
                            <span>5,647 reviews</span>
                        </div>
                        <h3>Radisson Hotel Jaipur City Center</h3>
                        <p>Khasa Kothi Circle, Gopalbari, Jaipur, 302001, India</p>
                    </div>
                </div>
                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/more hotels image.jpg">
                        <h3>Explore more Hotels</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="explorehotels.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more Manali attractions here -->
            </div>
        </section>


        <!--place4 Section -->

        <section id="place4" class="hotelcity-section" style="display:none;">
            <h2>Manali Hotels</h2>

            <div class="attractions-list">
                <!-- place4 Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/The Himalayan Hotel image.jpg">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.1/5</span>
                            <span>5,405 reviews</span>
                        </div>
                        <h3>The Himalayan Hotel</h3>
                        <p>The Himalayan Hadimba Road Manali, Kullu Valley Himachal Pradesh, 175131, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/Welcomhotel By ITC Hotels, Hamsa Manali 5 star hotel image.webp" alt="Welcomhotel By ITC Hotels, Hamsa Manali
    
    5 star hotel">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.6/5</span>
                            <span>10,507 reviews</span>
                        </div>
                        <h3>Welcomhotel By ITC Hotels, Hamsa Manali</h3>
                        <p> Village Buruwa, 175103 Manāli, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/The Sunshine Heritage By Offlimits image.jpg"
                        alt="The Sunshine Heritage By Offlimits">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.0/5</span>
                            <span>6,750 reviews</span>
                        </div>
                        <h3>The Sunshine Heritage By Offlimits</h3>
                        <p>Old Manali Road, Old Manali, 175131 Manāli, India</p>
                    </div>
                </div>
                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/more hotels image.jpg">
                        <h3>Explore more Hotels</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="explorehotels.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more Rajasthan attractions here -->
            </div>
        </section>

        <!--place5 Section -->

        <section id="place5" class="hotelcity-section" style="display:none;">
            <h2>Dehradun Hotels</h2>
            <div class="attractions-list">
                <!-- place5 Attractions -->
                <div class="attraction-card">
                    <img src="./All-photos/Hotel Galaxy  image.avif">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>3.8/5</span>
                            <span>2,603 reviews</span>
                        </div>
                        <h3>Hotel Galaxy</h3>
                        <p>11/5 Tyagi Road, 248001, Dehradun, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/Jaypee Residency Manor image.jpg">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.1/5</span>
                            <span>7,537 reviews</span>
                        </div>
                        <h3>Jaypee Residency Manor</h3>
                        <p>Barlowganj, Dehradun, 248122, India</p>
                    </div>
                </div>
                <div class="attraction-card">
                    <img src="./All-photos/Clarion Hotel Dehradun image.avif" alt="Clarion Hotel Dehradun">
                    <div class="attraction-info">

                        <div class="attraction-info-rating">
                            <span>4.3/5</span>
                            <span>11,349 reviews</span>
                        </div>
                        <h3>Clarion Hotel Dehradun</h3>
                        <p>Nanda ki chowki, Chakarata road, Dehradun, Uttarakhand - 248007, India</p>
                    </div>
                </div>
                <!-- CTA Card -->
                <div class="cta-card">
                    <div class="cta-content">
                        <img src="./All-photos/more hotels image.jpg">
                        <h3>Explore more Hotels</h3>
                        <button>
                            <nav>
                                <ul>
                                    <li><a href="explorehotels.html">Go Now</a></li>
                                </ul>
                            </nav>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add more Rajasthan attractions here -->
            </div>
        </section>
        <script src="scripts.js"></script>
    </section>

    <section class="guide">
        <h1>Others</h1>
        </br>
        <div class="attractions-list">
            <!-- guide cards start from here -->
            <div class="attraction-card">
                <img src="./All-photos/Bangkokimage.jpg" alt="Explore Hidden Gems">
                <div class="attraction-info">
                    <h2>Explore Hidden Gems</h2>
                    <button>
                        <nav>
                            <ul>
                                <li><a href="hiddenGems.html">Go Now</a></li>
                            </ul>
                        </nav>
                    </button>


                </div>
            </div>
            <div class="attraction-card">
                <img src="./All-photos/Explore More Hotels image others.jpg" alt="Explore More Hotels">
                <div class="attraction-info">
                    <h2>Explore More Hotels</h2>
                    <button>
                        <nav>
                            <ul>
                                <li><a href="explorehotels.html">Go Now</a></li>
                            </ul>
                        </nav>
                    </button>

                </div>
            </div>
            <div class="attraction-card">
                <img src="./All-photos/Travel With Guides others image.webp" alt="Travel With Guides">
                <div class="attraction-info">
                    <h2>Travel With Guides</h2>
                    <button>
                        <nav>
                            <ul>
                                <li><a href="explorehotels.html">Go Now</a></li>
                            </ul>
                        </nav>
                    </button>
                </div>
            </div>
            <div class="attraction-card">
                <img src="./All-photos/Give Your Feedback others images.webp" alt="Give Your Feedback">
                <div class="attraction-info">
                    <h2>Give Your Feedback</h2>
                    <button>
                        <nav>
                            <ul>
                                <li><a href="feedback.php">Go Now</a></li>
                            </ul>
                        </nav>
                    </button>

                </div>
            </div>
    </section>
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
                        <a href="#"><img src="./All-photos/facebook footer image.png" alt="Facebook"></a>
                        <a href="#"><img src="./All-photos/twitter-icon footer image.png" alt="Twitter"></a>
                        <a href="#"><img src="./All-photos/youtube icon footer image.png" alt="YouTube"></a>
                    </li>
                </ul>
            </div>
            <div class="footer-column">
                <h3><big> About Us </big></h3>
                <ul>
                    <li><a href="#">Privacy Statement</a>
                    </li>

                    <li><a href="termsandcond.html">Terms & Conditions</a></li>
                    <li><a href="aboutus.html">About Tech-thrive.com</a></li>


                </ul>
            </div>
            <div class="footer-column">
                <h3><big>Other Services</big></h3>
                <ul>
                    <li><a href="#">Security</a></li>
                    <li><a href="#">Rewards</a></li>

                    <li><a href="hiddenGems.html">Hidden Gems</a></li>
                    <li><a href="popularAttractions.html">Popular Attraction</a></li>

                </ul>
            </div>
        </div>
        <div class="lastfooter">
            <p>&copy; 2024 Tech-thrive.com All rights reserved.</p>
        </div>
    </footer>


    <script>
 // Wait for the DOM to be fully loaded
 document.addEventListener("DOMContentLoaded", function() {
            // Display the spinner for 3 seconds
            setTimeout(function() {
                // Hide the spinner
                document.getElementById('loading-bar-spinner').classList.add('hidden');
            }, 2000); // 1 seconds delay
        });

        document.addEventListener('DOMContentLoaded', () => {
            const profileIcon = document.getElementById('profileIcon');
            const profileModal = document.getElementById('profileModal');
            const closeProfileBtn = document.querySelector('.close-profile-btn');
            const changeProfilePicBtn = document.getElementById('changeProfilePicBtn');
            const profilePicUpload = document.getElementById('profilePicUpload');
            const profilePicPreview = document.getElementById('profilePicPreview');
            const saveProfileBtn = document.getElementById('saveProfileBtn');

            // Show profile modal when the profile icon is clicked
            profileIcon.addEventListener('click', () => {
                profileModal.style.display = 'block';
                setTimeout(() => {
                    profileModal.classList.add('open');
                }, 10); // Delay to allow the transition effect
            });

            // Hide profile modal when the close button is clicked
            closeProfileBtn.addEventListener('click', () => {
                profileModal.classList.remove('open');
                setTimeout(() => {
                    profileModal.style.display = 'none';
                }, 300); // Delay to allow transition effect to complete
            });

            // Close the modal if the user clicks outside of it
            window.addEventListener('click', (event) => {
                if (event.target === profileModal) {
                    profileModal.classList.remove('open');
                    setTimeout(() => {
                        profileModal.style.display = 'none';
                    }, 300);
                }
            });

            // Handle profile picture change
            changeProfilePicBtn.addEventListener('click', () => {
                profilePicUpload.click();
            });

            profilePicUpload.addEventListener('change', (event) => {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        profilePicPreview.src = e.target.result; // Update profile picture preview
                    };
                    reader.readAsDataURL(file); // Read the file and trigger onload event
                }
            });

            // Save updated profile details
            saveProfileBtn.addEventListener('click', () => {
                const userName = document.getElementById('userName').value;
                const userEmail = document.getElementById('userEmail').value;
                const userPhone = document.getElementById('userPhone').value;
                const userAge = document.getElementById('userAge').value;
                const userGender = document.getElementById('userGender').value;

                // Here, you would typically send this data to a back-end server.
                // For now, let's just log it to the console or store it in localStorage as an example.

                console.log({
                    name: userName,
                    email: userEmail,
                    phone: userPhone,
                    age: userAge,
                    gender: userGender,
                    profilePic: profilePicPreview.src, // Profile pic preview URL (base64)
                });

                // Example: Saving to localStorage (could be replaced with a backend API call)
                localStorage.setItem('userProfile', JSON.stringify({
                    name: userName,
                    email: userEmail,
                    phone: userPhone,
                    age: userAge,
                    gender: userGender,
                    profilePic: profilePicPreview.src,
                }));

                alert('Profile updated successfully!');
                profileModal.classList.remove('open');
                setTimeout(() => {
                    profileModal.style.display = 'none';
                }, 300);
            });

            // Optionally, you could load saved profile data from localStorage to pre-fill the form on page load.
            const savedProfile = localStorage.getItem('userProfile');
            if (savedProfile) {
                const profileData = JSON.parse(savedProfile);
                document.getElementById('userName').value = profileData.name;
                document.getElementById('userEmail').value = profileData.email;
                document.getElementById('userPhone').value = profileData.phone;
                document.getElementById('userAge').value = profileData.age;
                document.getElementById('userGender').value = profileData.gender;
                profilePicPreview.src = profileData.profilePic;
            }
        });




        //register js is here
        document.addEventListener('DOMContentLoaded', () => {
            const signInModal = document.getElementById('signInModal');
            const closeSignInBtn = document.querySelector('.close-btn');
            const registerBtn = document.getElementById('register'); // Existing register button in the modal
            const loginBtn = document.getElementById('login');
            const container = document.getElementById('container');

            // New Register button in the header
            const headerRegisterBtn = document.getElementById('headerRegisterBtn');

            // Automatically show the registration modal when the page loads (if needed)
            signInModal.style.display = 'block'; // Uncomment if needed to auto-load modal on page load

            // Function to open the modal and switch to the sign-up view
            const showSignUpModal = () => {
                signInModal.style.display = 'block'; // Show the modal
                container.classList.add('active');   // Switch to "Sign Up" view (by adding active class)
            };

            // Function to open the modal and switch to the sign-in view
            const showSignInModal = () => {
                signInModal.style.display = 'block'; // Show the modal
                container.classList.remove('active'); // Switch to "Sign In" view (by removing active class)
            };

            // Function to close the modal
            const closeModal = () => {
                signInModal.style.display = 'none';  // Hide the modal
            };

            // Show the sign-up form when the "Register" button in modal is clicked
            registerBtn.addEventListener('click', () => {
                showSignUpModal(); // Opens the modal and shows the "Sign Up" form
            });

            // Show the sign-in form when the "Sign In" button is clicked
            loginBtn.addEventListener('click', () => {
                showSignInModal(); // Opens the modal and shows the "Sign In" form
            });

            // Close the modal when the close button is clicked
            closeSignInBtn.addEventListener('click', () => {
                closeModal(); // Closes the modal
            });

            // Hide modal when clicking outside of the modal content
            window.addEventListener('click', (event) => {
                if (event.target === signInModal) {
                    closeModal(); // Closes the modal if clicked outside modal content
                }
            });

            // Show the sign-up modal when the header "Register" button is clicked
            headerRegisterBtn.addEventListener('click', () => {
                showSignUpModal(); // Open the modal and show the "Sign Up" form
            });
        });



        // Ensure the DOM is fully loaded before running the script
        window.onload = function () {
            // First carousel logic
            let currentIndex1 = 0;    // Start with the first image in the first carousel
            const items1 = document.querySelectorAll('#carousel1 .carousel-item'); // Get all carousel items for the first carousel
            const totalItems1 = items1.length; // Count total items

            function changeImage1() {
                // Remove 'active' class from the current item
                items1[currentIndex1].classList.remove('active');

                // Move to the next item (loop back to the first after the last)
                currentIndex1 = (currentIndex1 + 1) % totalItems1;

                // Add 'active' class to the next item
                items1[currentIndex1].classList.add('active');
            }

            // Change image every 3 seconds for the first carousel
            setInterval(changeImage1, 3000);

            // Second carousel logic
            let currentIndex2 = 0;    // Start with the first image in the second carousel
            const items2 = document.querySelectorAll('#carousel2 .carousel-item'); // Get all carousel items for the second carousel
            const totalItems2 = items2.length; // Count total items

            function changeImage2() {
                // Remove 'active' class from the current item
                items2[currentIndex2].classList.remove('active');

                // Move to the next item (loop back to the first after the last)
                currentIndex2 = (currentIndex2 + 1) % totalItems2;

                // Add 'active' class to the next item
                items2[currentIndex2].classList.add('active');
            }

            // Change image every 3 seconds for the second carousel
            setInterval(changeImage2, 3000);
        };



        function showSection(sectionId) {
            // Hide all sections
            var sections = document.querySelectorAll('.city-section');
            sections.forEach(function (section) {
                section.style.display = 'none';
            });

            // Show the selected section
            var selectedSection = document.getElementById(sectionId);
            if (selectedSection) {
                selectedSection.style.display = 'block';
            }
            // Remove active class from all buttons
            var buttons = document.querySelectorAll('.tab-button');
            buttons.forEach(function (btn) {
                btn.classList.remove('active');
            });
            var clickedButton = document.querySelector('button[onclick="showSection(\'' + sectionId + '\')"]');
            if (clickedButton) {
                clickedButton.classList.add('active');
            }
        }

        // Optionally, you can show the first section by default
        document.addEventListener('DOMContentLoaded', function () {
            showSection('chandigarh'); // Show Chandigarh by default
        });







        function showSectionH(sectionId) {
            // Hide all sections
            var sections = document.querySelectorAll('.hiddencity-section');
            sections.forEach(function (section) {
                section.style.display = 'none';
            });

            // Show the selected section
            var selectedSection = document.getElementById(sectionId);
            if (selectedSection) {
                selectedSection.style.display = 'block';
            }
            // Remove active class from all buttons
            var buttons = document.querySelectorAll('.tab-button');
            buttons.forEach(function (btn) {
                btn.classList.remove('active');
            });
            var clickedButton = document.querySelector('button[onclick="showSectionH(\'' + sectionId + '\')"]');
            if (clickedButton) {
                clickedButton.classList.add('active');
            }
        }

        // Optionally, you can show the first section by default
        document.addEventListener('DOMContentLoaded', function () {
            showSectionH('kakra'); // Show Chandigarh by default
        });





        function showSectionhotel(sectionId) {
            // Hide all sections
            var sections = document.querySelectorAll('.hotelcity-section');
            sections.forEach(function (section) {
                section.style.display = 'none';
            });

            // Show the selected section
            var selectedSection = document.getElementById(sectionId);
            if (selectedSection) {
                selectedSection.style.display = 'block';
            }
            // Remove active class from all buttons
            var buttons = document.querySelectorAll('.tab-button');
            buttons.forEach(function (btn) {
                btn.classList.remove('active');
            });
            var clickedButton = document.querySelector('button[onclick="showSectionhotel(\'' + sectionId + '\')"]');
            if (clickedButton) {
                clickedButton.classList.add('active');
            }
        }


        // Optionally, you can show the first section by default
        document.addEventListener('DOMContentLoaded', function () {
            showSectionhotel('place1'); // Show Chandigarh by default

        });




        // script.js

        document.getElementById('searchButton').addEventListener('click', async () => {
            const location = document.getElementById('location').value.trim();
            if (!location) {
                alert('Please enter a city or state.');
                return;
            }

            const apiKey = 'b3edd18764e3a83f2527c8eb2281b10f'; // Replace with your actual API key
            const url = `https://api.openweathermap.org/data/2.5/weather?q=${location}&appid=${apiKey}&units=metric`;

            try {
                const response = await fetch(url);
                const data = await response.json();

                if (data.cod !== 200) {
                    document.getElementById('weatherInfo').innerHTML = '<p>Location not found. Please try again.</p>';
                    return;
                }

                document.getElementById('weatherInfo').innerHTML = `
            <h2>${data.name}</h2>
            <p>Temperature: ${data.main.temp}°C</p>
            <p>Weather: ${data.weather[0].description}</p>
            <img src="http://openweathermap.org/img/wn/${data.weather[0].icon}.png" alt="${data.weather[0].description}">
        `;
            } catch (error) {
                console.error('Error fetching weather data:', error);
                document.getElementById('weatherInfo').innerHTML = '<p>Failed to fetch weather data. Please try again later.</p>';
            }
        });


        document.getElementById('bookingForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Extract form data
            const destination = document.getElementById('destination').value;
            const date = document.getElementById('date').value;
            const type = document.getElementById('type').value;
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;

            // Simulate form submission
            alert(`Booking Confirmed!\n
        Destination: ${destination}\n
        Travel Date: ${date}\n
        Travel Type: ${type}\n
        Name: ${name}\n
        Email: ${email}`);
        });

        document.getElementById('reviewForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Extract form data
            const name = document.getElementById('name').value;
            const rating = document.getElementById('rating').value;
            const reviewText = document.getElementById('reviewText').value;
            const photo = document.getElementById('photo').files[0];
            const video = document.getElementById('video').files[0];

            // Create review element
            const reviewElement = document.createElement('div');
            reviewElement.className = 'review';

            // Add rating
            reviewElement.innerHTML = `<div class="rating">Rating: ${rating} ⭐ </div>`;

            // Add review text
            reviewElement.innerHTML += `<p><strong>${name}:</strong> ${reviewText}</p>`;

            // Add photo
            if (photo) {
                const photoURL = URL.createObjectURL(photo);
                reviewElement.innerHTML += `<img src="${photoURL}" alt="Review Photo">`;
            }

            // Add video
            if (video) {
                const videoURL = URL.createObjectURL(video);
                reviewElement.innerHTML += `<video controls src="${videoURL}"></video>`;
            }

            // Add review to reviews container
            document.getElementById('reviewsContainer').appendChild(reviewElement);

            // Clear form
            document.getElementById('reviewForm').reset();
        });
    </script>

</body>

</html>