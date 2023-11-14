<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

        <style type="text/css">
            .header-blue {
              background: linear-gradient(135deg, #fe2929, #ffb3c5);
              background-color: #184e8e;
              padding-bottom: 80px;
              font-family: 'Source Sans Pro', sans-serif;
            }

            @media (min-width:768px) {
              .header-blue {
                padding-bottom: 120px;
              }
            }

            .header-blue .navbar {
              background: transparent;
              padding-top: .75rem;
              padding-bottom: .75rem;
              color: #fff;
              border-radius: 0;
              box-shadow: none;
              border: none;
            }

            @media (min-width:768px) {
              .header-blue .navbar {
                padding-top: 1rem;
                padding-bottom: 1rem;
              }
            }

            .header-blue .navbar .navbar-brand {
              font-weight: bold;
              color: inherit;
            }

            .header-blue .navbar .navbar-brand:hover {
              color: #f0f0f0;
            }

            .header-blue .navbar .navbar-collapse {
              border-top: 1px solid rgba(255,255,255,0.3);
              margin-top: .5rem;
            }

            @media (min-width:768px) {
              .header-blue .navbar .navbar-collapse {
                border-color: transparent;
                margin: 0;
              }
            }

            .header-blue .navbar .navbar-collapse span .login {
              color: #fff;
              margin-right: .5rem;
              text-decoration: none;
            }

            .header-blue .navbar .navbar-collapse span .login:hover {
              color: #fff;
            }

            .login {

                padding-left: 800px;
            }

            .header-blue .navbar .navbar-toggler {
              border-color: rgba(255,255,255,0.3);
            }

            .header-blue .navbar .navbar-toggler:hover, .header-blue .navbar-toggler:focus {
              background: none;
            }

            @media (min-width: 768px) {
              .header-blue .navbar-nav .nav-link {
                padding-left: .7rem;
                padding-right: .7rem;
              }
            }

            @media (min-width: 992px) {
              .header-blue .navbar-nav .nav-link {
                padding-left: 1.2rem;
                padding-right: 1.2rem;
              }
            }

            .header-blue .navbar.navbar-light .navbar-nav .nav-link {
              color: #fff;
            }

            .header-blue .navbar.navbar-light .navbar-nav .nav-link:focus, .header-blue .navbar.navbar-light .navbar-nav .nav-link:hover {
              color: #fcfeff !important;
              background-color: transparent;
            }

            .header-blue .navbar .navbar-nav > li > .dropdown-menu {
              margin-top: -5px;
              box-shadow: 0 4px 8px rgba(0,0,0,.1);
              background-color: #fff;
              border-radius: 2px;
            }

            .header-blue .navbar .dropdown-menu .dropdown-item:focus, .header-blue .navbar .dropdown-menu .dropdown-item {
              line-height: 2;
              color: #37434d;
            }

            .header-blue .navbar .dropdown-menu .dropdown-item:focus, .header-blue .navbar .dropdown-menu .dropdown-item:hover {
              background: #ebeff1;
            }

            .header-blue .action-button, .header-blue .action-button:not(.disabled):active {
              border: 1px solid rgb(255,255,255);
              border-radius: 40px;
              color: #fff;
              box-shadow: none;
              text-shadow: none;
              padding: .3rem .8rem;
              background: transparent;
              transition: background-color 0.25s;
              outline: none;
            }

            .header-blue .action-button:hover {
              color: #fff;
            }

            .header-blue .navbar .form-inline label {
              color: #d9d9d9;
            }

            .header-blue .navbar .form-inline .search-field {
              display: inline-block;
              width: 80%;
              background: none;
              border: none;
              border-bottom: 1px solid transparent;
              border-radius: 0;
              color: #fff;
              box-shadow: none;
              color: inherit;
              transition: border-bottom-color 0.3s;
            }

            .header-blue .navbar .form-inline .search-field:focus {
              border-bottom: 1px solid #ccc;
            }

            .header-blue .hero {
              margin-top: 20px;
              text-align: center;
            }

            @media (min-width:768px) {
              .header-blue .hero {
                margin-top: 60px;
                text-align: left;
              }
            }

            .header-blue .hero h1 {
              color: #fff;
              font-size: 40px;
              margin-top: 0;
              margin-bottom: 15px;
              font-weight: 300;
              line-height: 1.4;
            }

            @media (min-width:992px) {
              .header-blue .hero h1 {
                margin-top: 190px;
                margin-bottom: 24px;
                line-height: 1.2;
              }
            }

            .header-blue .hero p {
              color: rgba(255,255,255,0.8);
              font-size: 20px;
              margin-bottom: 30px;
              font-weight: 300;
            }

            .header-blue .phone-holder {
              text-align: right;
            }

            .header-blue div.iphone-mockup {
             position: relative;
                max-width: 300px;
                margin-top: 172px;
                display: inline-block;
            }

            .header-blue .iphone-mockup img.device {
              width: 100%;
              height: auto;
            }

            .header-blue .iphone-mockup .screen {
              position: absolute;
              width: 88%;
              height: 77%;
              top: 12%;
              border-radius: 2px;
              left: 6%;
              border: 1px solid #444;
              background-color: #aaa;
              overflow: hidden;
              background: url(../../assets/img/screen-content-iphone-6.jpg);
              background-size: cover;
              background-position: center;
            }

            .header-blue .iphone-mockup .screen:before {
              content: '';
              background-color: #fff;
              position: absolute;
              width: 70%;
              height: 140%;
              top: -12%;
              right: -60%;
              transform: rotate(-19deg);
              opacity: 0.2;
            }

            .disable-link {
                pointer-events: none;
            }
        </style>
    </head>
    <body class="antialiased">
        <div>
            <div class="header-blue">
                <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            Assignment
                        </a>
                        <div class="collapse navbar-collapse"
                            id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#">Contacts</a>
                                </li>
                            </ul>
                            <span class="navbar-text"> 
                                <a class="login" href="#">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                      Add Contact
                                    </button>
                                </a>
                            </span>
                        </div>
                    </div>
                </nav>
                <div class="dropdown">
                    <select class="form-select" id="search-by" aria-label="Default select example">
                      <option selected value="">Search By</option>
                      <option value="id">Id</option>
                      <option value="name">Name</option>
                      <option value="email">Email</option>
                      <option value="title_id">Job Title</option>
                      <option value="dates">Dates</option>
                    </select>
                    <input type="text" id="search-value" name="search-value">
                    <button id="search-click">Search</button>
                </div>
                <div class="container hero">
                    <div class="row">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Job Title</th>
                              <th scope="col">Dates</th>
                            </tr>
                          </thead>
                          <tbody id="contact-data">
                            
                          </tbody>
                        </table>
                    </div>
                </div>
                <nav id="current-pag" aria-label="Page navigation example" data-currentpage="">
                  <ul class="pagination">
                    <li class="page-item"><a id="prev-pag" class="disable-link page-link" href="#">Previous</a></li>
                    <li class="page-item"><a id="next-pag" class="disable-link page-link" href="#">Next</a></li>
                  </ul>
                </nav>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" id="addContactFormData">

                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Job Title Field -->
                            <div class="mb-3">
                                <label for="job_title" class="form-label">Job Title</label>
                                <select class="form-select" id="job_title" name="job_title" required>
                                    <option value="CEO">CEO</option>
                                    <option value="CIO">CIO</option>
                                    <option value="CTO">CTO</option>
                                    <option value="DEV">DEV</option>
                                    <option value="MNG">MNG</option>
                                </select>
                            </div>

                            <!-- Date Field -->
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                        </form>
                    </div>
                <div class="modal-footer">
                    <button type="button" id="modalClose" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="addContactForm" class="btn btn-primary">Add Contact</button>
                </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        $( document ).ready(function() {

            var current_page; 
            var requested_page = 1;
            var search_by = "";
            var search_value = "";
            
            function updateData() {

                $('#next-pag').addClass('disable-link');
                $('#prev-pag').addClass('disable-link');

                $.get(

                    "/api/contacts?search_by="+search_by+"&search_value="+search_value+"&page="+requested_page, 
                    function(data, status){
                    
                        var contactData = '';
                        data.data.data.map(function(value, key) {

                            contactData += `<tr>
                                              <th scope="row">`+value.id+`</th>
                                              <td>`+value.name+`</td>
                                              <td>`+value.email+`</td>
                                              <td>`+value.job_title.title+`</td>
                                              <td>`+value.dates+`</td>
                                            </tr>`;

                            //console.log(contactData);
                        });

                        //console.log(data.data.current_page, data.data.last_page)

                        if(data.data.current_page > 1) {

                            $('#prev-pag').removeClass('disable-link');
                        }
                        if(data.data.current_page < data.data.last_page) {

                            $('#next-pag').removeClass('disable-link');
                        }

                        current_page = data.data.current_page;

                        $('#contact-data').html(contactData);

                });
            }

            $('#next-pag').click( function () {

                requested_page = current_page + 1;

                updateData();
            });

            $('#prev-pag').click( function () {

                requested_page = current_page - 1;

                updateData();
            });

            $('#search-click').on('click', function() {

                requested_page = 1;

                search_by = $('#search-by').val();
                search_value = $('#search-value').val();

                if(!search_by || !search_value) {

                    alert('Please select type and enter keywords to search');
                }else {

                    updateData();
                }
            });

            $('#addContactForm').on('click', function () {

                 $('.alert').remove();

                var formData = $('#addContactFormData').serialize();

                $.ajax({
                    type: 'POST',
                    url: '/api/add-contact',
                    data: formData,
                    success: function (response) {

                        $('#modalClose').trigger('click');
                        alert('Contact added successfully!');
                    },
                    error: function (xhr) {

                        var errors = xhr.responseJSON.errors;

                        $.each(errors, function (key, value) {
                            $('#' + key).after('<div class="alert alert-danger">' + value[0] + '</div>');
                        });
                    }
                });
            });

            updateData();
        });
        
    </script>
</html>
