<!-- ##### Header Area Start ##### -->


<nav style="background: white" class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
    <div class="top-navbar">
        <div class="col-md-6">
            <ul style="padding-left: 100px" class="top">
                <li class="nav-item">
                    <a style="color: white" class="nav-link topbar_content" href="tel:{{ $data->phone }}">
                        <i class="fa-solid fa-phone"></i>
                        {{ $data->phone }}
                    </a>
                </li>
                <li class="nav-item">
                    <a style="color: white" class="nav-link topbar_content" href="mailto:{{ $data->email }}">
                        <i class="fa-regular fa-envelope"></i>
                        {{ $data->email }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="top">
                
                <li class="nav-item">
                    <a style="color: white" class="nav-link topbar_content" href="{{ route('wishlist') }}">
                        <i class="fa-regular fa-heart"></i>
                        Wishlist
                    </a>
                </li>
                <li style="padding-left:50px" class="nav-item">

                    <a href="{{ route('login') }}">
                        <button class="top-btn" style="background-color:#644700;color:white;border:none">
                            <i class="fa-regular fa-user"></i>
    
                            Signup/Login
                        </button>
                    </a>


                </li>
            </ul>
        </div>


    </div>


    <div class="container justify-content-between">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('index') }}"><span><img width="60px"
                    src="{{ asset('storage/general_info/' . $data->logo) }}" alt=""></span></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all_works') }}">Works</a>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frame') }}">frame</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('exhibition') }}">exhibition</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all_artist') }}">artist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery') }}">gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all_blogs') }}">blogs</a>
                </li>
                <div class="carts">
                    <li class="nav-item">
                        <a class="nav-link topbar_content" href="{{ route('carts') }}">
                            Carts
                            <i style="color: #644700" class="fa-solid fa-cart-shopping"></i>
                           
                        </a>
                    </li>
                </div>
                <li class="lh-55px">
                    <a href="#" class="btn login-btn ml-50" data-target="#searchModal">
                        <i style=" font-size: 20px;" class="fas fa-search"></i>
                    </a>
                </li>
               
                {{-- <div id="searchModal" class="modal">
                    <div class="modal-content">
                      <span class="close">&times;</span>
                      <input type="text" placeholder="Search...">
                      <button type="button">Search</button>
                    </div>
                  </div>  --}}
            </ul>
        </div>
    </div>
</nav>
<div  id="searchModal" class="modal">
    <div class="modal-content">
        <div class="modal_header">
        <span style="color: white;font-size:24px;font-family:Century Gothic;">Search Product</span>
        <span class="close">  &times;</span></div>
        <input class="form-control" id="searchInput" type="text" placeholder="Search...">
        <ul id="searchResults"></ul>
        <div class="search-btn2">
        <button class="search-button">Search</button>
    </div>
    </div>

</div>
<!-- ##### Header Area End ##### -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get the modal element
    var modal = document.getElementById("searchModal");

    // Get the search button element
    var searchButton = document.querySelector(".btn.login-btn.ml-50");

    // Get the close button element
    var closeButton = document.querySelector(".close");

    // Get the search input element
    var searchInput = document.getElementById("searchInput");

    // Get the search results element
    var searchResults = document.getElementById("searchResults");

    // Define your search data (example)
    var searchData = [
        "Afro collage A",
        "Afro collage B",
        "Afro collage C",
        // Add more search data as needed
    ];

    // Function to perform the search and update the results
    function performSearch() {
        var searchTerm = searchInput.value.toLowerCase();
        var matchingResults = searchData.filter(function(result) {
            return result.toLowerCase().includes(searchTerm);
        });

        // Clear previous results
        searchResults.innerHTML = "";

        // Display matching results
        matchingResults.forEach(function(result) {
            var li = document.createElement("li");
            var link = document.createElement("a");
            link.href = "#"; // Set the appropriate link for each result
            link.textContent = result;
            li.appendChild(link);
            searchResults.appendChild(li);
        });

        // Show or hide the search results based on the search term
        searchResults.addEventListener("click", function(event) {
            if (event.target.tagName === "A") {
                // Perform the action when a search result is clicked
                var selectedResult = event.target.textContent;
                // Do something with the selected result, such as navigating to a page
                console.log("Selected result:", selectedResult);

                // Hide the modal after the action is performed (optional)
                closeModal();
            }
        });
    }

    // Function to open the modal
    function openModal() {
        modal.style.display = "block";
        setTimeout(function() {
            modal.classList.add("open");
        }, 10);
    }

    // Function to close the modal
    function closeModal() {
        modal.classList.remove("open");
        setTimeout(function() {
            modal.style.display = "none";
        }, 300);
    }

    // When the search button is clicked, show the modal
    searchButton.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default anchor click behavior
        openModal();
    });

    // When the close button is clicked, hide the modal
    closeButton.addEventListener("click", closeModal);

    // When the user clicks outside the modal, hide it
    window.addEventListener("click", function(event) {
        if (event.target == modal) {
            closeModal();
        }
    });

    // When the user types in the search input, perform the search
    searchInput.addEventListener("input", performSearch);
});


    document.addEventListener("DOMContentLoaded", function() {
        // Get the top navbar element
        var topNavbar = document.querySelector(".top-navbar");

        // Get the height of the banner element
        var bannerHeight = document.getElementById("banner").offsetHeight;

        // Function to toggle the visibility of the top navbar
        function toggleTopNavbarVisibility() {
            if (window.pageYOffset >= bannerHeight) {
                topNavbar.style.display = "none";
            } else {
                topNavbar.style.display = "flex";
            }
        }

        // Add event listener for scroll events
        window.addEventListener("scroll", toggleTopNavbarVisibility);

        // Initially check the visibility on page load
        toggleTopNavbarVisibility();
    });
</script>
