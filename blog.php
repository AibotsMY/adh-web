<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Asia Deal</title>
  <link rel="favicon" href="assets/images/favicon.webp">
  <link rel="stylesheet" href="assets/css/font-iner.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
  <link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/nav.css">
</head>

<body>
  <div id="app" class="layout language-en">

    <?php include('header.php'); ?>
    <div id="content" class="site-content layout-full">
      <div class="page-container">
        <main class="site-main">
          <div class="page-content">

            <!-- Header -->
            <header id="head" style="background: linear-gradient(90deg, black 14%, rgba(0, 0, 0, 0.09) 92%, rgba(0, 0, 0, 0) 100%), 
            #181015 url(assets/images/banner15.webp) no-repeat;background-size: cover;">
              <div class="container">
                <div class="heading">
                  <h1 style="font-family:Inter">
                    Insights and <br>Inspiration</h1>
                  <p style="color:white">
                    Stay Informed, Stay Inspired, Stay Connected
                  </p>
                  <br />

                </div>
                <div class="banner-content">

                </div>
              </div>
            </header>

          </div>
        </main>
      </div>
    </div>
  </div>


  <div class="page-container3 sectionBox" style="background:#E5E7EB">
    <div class="" id="spacing">
      <h2 style="margin-bottom:20px">Featured Blog</h2>
      <div class="row row-height" id="featured_section">
        <div class="col-xs-18 col-sm-7 col-md-7 col-custom pr0">
          <div class="img-box">
            <img src="assets/images/im6.webp">
          </div>
          <!-- end img box -->
        </div>

        <div class="col-xs-18 col-sm-5 col-md-5" style="background:#0F122B;">
          <div id="about-text">
            <h6 style="color:#DC1010">INDUSTRY</h6>
            <h4 style="color:white;line-height: 2.5rem; font-size:30px;">How To Choose Best Management Tool</h4>
            <p style="color:white; margin-top:20px !important;">Static websites are now used to bootstrap lots of
              websites and are becoming the basis for a variety...</p>
            <a href="blog-inside.php" class="btn btn-info btn-xs mt-4" role="button">READ MORE</a>
          </div>
          <!-- end about text-->

        </div>
        <!-- end col -->
      </div>
      <!-- end row -->

    </div>
  </div>
  <div class="page-container3 serviceslist" style="background:#E5E7EB">
    <div class="container" id="spacing">
      <div class="row">
        <div class="col-md-12">
          <header class="heading">
            <h2>Latest Article</h2>

          </header>
        </div>
      </div>
      <div class="row">

        <div class="col-xs-18 col-sm-12 col-md-12">
          <div class="thumbnail">
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-6">
                  <div class="select-container">

                    <select id="selectField">
                      <option value="option1">Insight Type: All</option>
                      <option value="option2">Option 2</option>
                      <option value="option3">Option 3</option>
                    </select>
                    <span class="dropdown-icon">&#9660;</span>
                  </div>
                  <!-- Add more filter fields as needed -->
                </div>
                <div class="col-md-6">
                  <div class="select-container">

                    <select id="selectField">
                      <option value="option1">All</option>
                      <option value="option2">Option 2</option>
                      <option value="option3">Option 3</option>
                    </select>
                    <span class="dropdown-icon">&#9660;</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                  <div class="search-container">
                    <i class="fa fa-search search-icon"></i>
                    <input type="text" placeholder="Search..." class="search-input">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="row" id="blog_container">

        <!-- <div class="col-xs-18 col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="assets/images/imm1.webp" style="height:200px;width:100%;" />
            <div class="caption">
              <p style="color:#DC1010;font-size:12px"><b style="color:#DC1010">TIPS</b></p>
              <p style="font-size:12px"><b style="color:black">May 16 2023</b></p>
              <h4>Leveraged Customer Feedback for Improved Services</h4>
              <p>Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety...
              </p>
            </div>
          </div>
        </div> -->

      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <nav class="pagination-container" aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">

                  <svg width="16" height="16" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVG">
                      <path id="Vector" d="M7.92188 3.26196L8.70234 2.48149C9.03281 2.15103 9.56719 2.15103 9.89414 2.48149L16.7285 9.31235C17.059 9.64282 17.059 10.1772 16.7285 10.5041L9.89414 17.3385C9.56367 17.669 9.0293 17.669 8.70234 17.3385L7.92188 16.5581C7.58789 16.2241 7.59492 15.6791 7.93594 15.3522L12.1723 11.3163H2.06836C1.60078 11.3163 1.22461 10.9401 1.22461 10.4725V9.34751C1.22461 8.87993 1.60078 8.50376 2.06836 8.50376H12.1723L7.93594 4.46782C7.59141 4.14087 7.58437 3.59595 7.92188 3.26196Z" fill="#0F122B" />
                    </g>
                  </svg>

                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">

                  <svg width="17" height="17" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVG">
                      <path id="Vector" d="M17.7754 4.00366V15.8162C17.7754 16.2837 17.3992 16.6599 16.9316 16.6599H16.0879C15.6203 16.6599 15.2441 16.2837 15.2441 15.8162V4.00366C15.2441 3.53608 15.6203 3.15991 16.0879 3.15991H16.9316C17.3992 3.15991 17.7754 3.53608 17.7754 4.00366ZM7.91406 6.33804L10.2203 8.64429H2.86914C2.40156 8.64429 2.02539 9.02046 2.02539 9.48804V10.3318C2.02539 10.7994 2.40156 11.1755 2.86914 11.1755H10.2203L7.91406 13.4818C7.58359 13.8123 7.58359 14.3466 7.91406 14.6736L8.51172 15.2712C8.84219 15.6017 9.37656 15.6017 9.70352 15.2712L14.4672 10.5076C14.7977 10.1771 14.7977 9.64272 14.4672 9.31577L9.70352 4.54858C9.37305 4.21812 8.83867 4.21812 8.51172 4.54858L7.91406 5.14624C7.58359 5.47671 7.58359 6.01108 7.91406 6.33804Z" fill="#0F122B" />
                    </g>
                  </svg>

                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div><!-- End container -->

  </div>

  <?php include('footer.php'); ?>
  <script src="assets/js/navigation.js"></script>
  <script src="assets/js/common.js"></script>
  <script src="assets/js/blog.js"></script>
  <script>
    $.ajax({
      url: 'https://app.asiadealhub.com/resource/',
      type: 'GET',
      success: function(response) {
        let feature_section = $('#featured_section');
        console.log(feature_section);
        let feature_blog = response.find((blog) => blog.featured);
        console.log(feature_blog);
        feature_section.find('img').attr('src', feature_blog.featured_image_path);
        feature_section.find('h4').text(feature_blog.title);
        feature_section.find('h6').text(feature_blog.type.toUpperCase());
        feature_section.find('p').text(feature_blog.description.substring(0, 100) + '...');
        feature_section.find('a').attr('href', 'blog-inside.php?id=' + feature_blog.id);

        let blogs_container = $('#blog_container');
        let blogs = response.filter((blog) => !blog.featured);
        blogs.forEach((blog) => {
          let blog_html = `
          <div class="col-xs-18 col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="${blog.featured_image_path}" style="height:200px;width:100%;object-fit: cover;" />
              <div class="caption">
                <p style="color:#DC1010;font-size:12px"><b style="color:#DC1010">${blog.type.toUpperCase()}</b></p>
                <p style="font-size:12px"><b style="color:black">${blog.post_date}</b></p>
                <h4 style="line-height: 1.5rem">${blog.title}</h4>
                <p>${blog.description.substring(0, 100) + '...'}</p>
              </div>
            </div>
          </div>
          `;
          blogs_container.append(blog_html);
        });
      }
    });
  </script>

</body>


</html>