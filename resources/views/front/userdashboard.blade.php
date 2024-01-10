
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>PR PARTNERS - Service Sheet</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&amp;family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.css">

    <link rel="stylesheet" href="{{ asset('/pr/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/pr/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/pr/css/spinner.css') }}" >
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

</head>
<body class="bg_color">

  <header class="header_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header_content">
                    <div class="logo_img">
                        <img src="{{ asset('/pr/img/Logo.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="log_out_bnt">
                        <a class="btn" href="{{ url('/auth-logout') }}" role="button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </header>

  <style>
  .ques_btn {
    min-height: 50px;
  }

  /* style=" !important;" */
</style>
<section class="publication_wrapper p-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="pricing_content">
          <div class="pricing_text">
            <h2>Service sheet (PR-Partners)</h2>
            <p style="font-size: 14px;">
              - Payments are upfront for new clients, we accept crypto & wire transfers. We also accept payments via
              escrow.com. <br>
              - Writing is included in the price.<br>
              - Additional escrow fees (Also Upwork) are not included in the pricing.<br>
              - Cancellations are not free. We will charge 10% of the total sum for writing and reservation, with a
              minimum amount of 100$.<br>
              - Click here to contact us.
            </p>
          </div>
        </div>

        <div class="tab_btn" style="border-bottom: 1px solid #EAEAEA;margin-bottom: 10px;">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-most-popular-tab"
                    data-toggle="pill" href="#pills-most-popular" role="tab" aria-controls="pills-home"
                    aria-selected="true">Most Popular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="pills-home-tab"
                    data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All
                    Publications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Press Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Press Releases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-services-tab" data-toggle="pill" href="#pills-services" role="tab"
                    aria-controls="pills-services" aria-selected="false">Other Services</a>
                </li>
            </ul>
            <div class="ques_btn">
                <a class="btn" href="https://pr.prpartnersinternational.com/download-questionnaire" role="button">Download PR Questionnaire</a>
            </div>
        </div>

        <div class="tab_wrapper">
            <div class="tab-content" id="pills-tabContent"><!-- pills-most-popular -->
                <div class="tab-pane fade show active" id="pills-most-popular" role="tabpanel" aria-labelledby="pills-most-popular-tab">
                <!-- sdgfkls -->
                    <div class="rightside_publication">
                        <div class="publication_content most_popular">
                            <div class="publications_show" id="publicationTable">
                                <span>Showing <span class="">61</span> of 61 publications</span>
                            </div>
                            <div class="mobile-tb">
                                <table class="tableIphone">
                                    <thead>
                                        <tr>
                                            <th class="text-left cpy_content">Most Popular Publication</th>
                                            <th>Genres</th>
                                            <th>Price</th>
                                            <th class='d-flex'>DA
                                                <div class="tooltip"><i class="fa-regular fa-circle-question"></i>
                                                    <p class="tooltiptext">
                                                        <span>Domain authority</span><br>
                                                        Search engine ranking score (1-100)
                                                    </p>
                                                </div>
                                            </th>
                                            <th>TAT
                                                <div class="tooltip"><i class="fa-regular fa-circle-question"></i>
                                                    <p class="tooltiptext">
                                                    <span>Time at arrival</span><br>
                                                    Estimated time to deliver
                                                    </p>
                                                </div>
                                            </th>
                                            <th>Article Type</th>
                                            <th>Country/Region</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="overview_company" id="overview_tab">
                                <div class="spinner_wreap d-none">
                                    <div id="mySpinner" class="dots-bars-4"></div>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="text-left">Publication</th>
                                            <th>Genres</th>
                                            <th>Price</th>
                                            <th class='d-flex'>DA
                                                <div class="tooltip"><i class="fa-regular fa-circle-question"></i>
                                                    <p class="tooltiptext">
                                                    <span>Domain authority</span><br>
                                                    Search engine ranking score (1-100)
                                                    </p>
                                                </div>
                                            </th>
                                            <th>TAT
                                                <div class="tooltip"><i class="fa-regular fa-circle-question"></i>
                                                    <p class="tooltiptext">
                                                    <span>Time at arrival</span><br>
                                                    Estimated time to deliver
                                                    </p>
                                                </div>
                                            </th>
                                            <th>Article Type</th>
                                            <th>Country/Region</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                        @foreach($publications as $data)
                                        <tr id="pub{{ $data->id }}">
                                            <td class="cpy_content">
                                                <div class="cpy_logo">
                                                    <div class="cpy_logo_img">
                                                        <img src="{{ $data->image }}" class="img-fluid" alt="">
                                                    </div>
                                                    <span>
                                                        <a href="javascript:void(0)">{{ $data->title }}</a>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <?php 
                                                    if($data->genres ?? ''){
                                                        $genress = json_decode($data->genres);
                                                        if(count($genress)>1){ ?>
                                                            <div class="tooltip tooltip_data"><i class="fa-regular fa-circle-question"></i>
                                                                <ul class="tooltiptext">
                                                                <?php 
                                                                    $genress = json_decode($data->genres);
                                                                    foreach($genress as $gen){
                                                                        $genre = (App\Models\Genre::where('id','=',$gen)->first()); ?>
                                                                            <li>{{ $genre->genre_name }}</li>
                                                                    <?php     
                                                                        }
                                                                    ?>
                                                                </ul>
                                                            </div> 
                                                <?php   }else{ ?>
                                                            <?php 
                                                                $genress = json_decode($data->genres);
                                                                foreach($genress as $gen){
                                                                    $genre = (App\Models\Genre::where('id','=',$gen)->first()); ?>
                                                                    {{ $genre->genre_name }}
                                                                <?php     
                                                                    }
                                                                ?>
                                                    <?php   }
                                                        }
                                                    ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    if($data->price == 0){
                                                        print_r('ASK');
                                                    }else{ ?>
                                                        ${{ $data->price }}
                                            <?php    }
                                                        
                                                ?>
                                            </td>
                                            <td>{{ $data->turn_around_time }}</td>
                                            <td>{{ $data->domain_authority }}</td>
                                            <td>
                                                <?php 
                                                    $article = $data->article_type;
                                                    $articleType = (App\Models\ArticleType::where('id','=',$article)->first());
                                                    print_r($articleType->article_type);    
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $country = $data->country;
                                                    $cntry = (App\Models\Country::where('id','=',$country)->first());
                                                    print_r($cntry->country_name);
                                                ?>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
              <!-- sdfgsfd -->
            </div>
            <!-- End -->
            <div class="tab-pane fade show " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <!-- Add reset and apply filter button here -->
                <div>
                    <div class="ques_btn">
                        <a id="reset_button" class="btn d-none" href="javascript:void(0)" role="button">Reset all filters</a>
                    </div>
                </div>
              <!-- Reset filter and apply filter button end here ! -->
                <div class="publication_content">
                    <div class="leftside_rang">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Publication name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="pub_name">
                            </div>
                            <div class="form-group">
                                <div class="form-group asc_wrapper">
                                    <label for="exampleFormControlSelect1">Sort by</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option value=""></option>
                                        <option value="ASC">Price(ASC)</option>
                                        <option value="DESC">Price(DESC)</option>
                                    </select>
                                    <div class="chosen-container chosen-container-single" title="" id="exampleFormControlSelect1_chosen" style="width: 100%;">
                                    <div>
                                </div>
                                <div class="chosen-drop">
                                    <div class="chosen-search">
                                        <input class="chosen-search-input" type="text" autocomplete="off">
                                        </div>
                                            <ul class="chosen-results"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="range_wreap">
                                <h3>Price range</h3>
                                    <div id="slider-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
                                        <div class="slider-labels">
                                            <div class="caption">
                                                <span id="slider-range-value1">$0</span>
                                            </div>
                                            <div class="text-right caption">
                                                <span id="slider-range-value2">$27,000</span>
                                            </div>
                                        </div>
                                    <div>
                                    <input type="hidden" id="maxValue" value="27000" data-max="27000">
                                    <input type="hidden" id="minValue" value="0" data-min="0">
                                    <input type="hidden" name="minprice" value="0" class="min_value form-control">
                                    <input type="hidden" name="maxprice" data-id="27000" value="27000" class="max_value form-control">
                                </div>
                            </div>
                            <div class="form-group wrapper">
                                <label for="formGroupExampleInput1">Select regions</label>
                                <select multiple="" data-placeholder="Select regions" id="formGroupExampleInput1">
                                    @foreach($countries as $cnt)
                                    <option value="{{$cnt->id}}">{{ $cnt->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="select_wreap">
                                <h3>Select genres</h3>
                                <div class="publication_list">
                                    @foreach($genres as $genr)
                                    <input type="checkbox" id="genres{{$genr->id}}" name="genres" class="checkgenre" value="{{ $genr->id ?? '' }}" style="display:none;">
                                    <label for="genres{{$genr->id}}"><a id="genid{{$genr->id}}">{{ $genr->genre_name }}</a></label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="select_wreap">
                                <h3>Article Type</h3>
                                <div class="publication_list">
                                    @foreach($articles as $art)
                                    <input type="checkbox" id="atype{{ $art->id }}" name="atype" class="checkarticle" value="{{ $art->id ?? '' }}" style="display:none;">
                                    <label for="atype{{ $art->id }}"><a id="a_id{{$art->id}}">{{ $art->article_type }}</a></label>
                                    @endforeach
                                </div>
                            </div>
                            <hr>
                            <div class="ques_btn">
                                <a class="btn" role="button">Reset all filters</a>
                            </div>
                        </form>
                    </div>
                    <div class="rightside_publication">
                        <div class="publications_show">
                            <?php $total = count($publications); ?>
                            <span>Showing {{ $total }} of {{ $total }} publications</span>
                        </div>
                        <div class="overview_company">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="text-left">Publication</th>
                                        <th>Genres</th>
                                        <th>Price</th>
                                        <th>TAT
                                            <div class="tooltip"><i class="fa-regular fa-circle-question"></i>
                                                <p class="tooltiptext">
                                                <span>Time at arrival</span><br>
                                                Estimated time to deliver
                                                </p>
                                            </div>
                                        </th>
                                        <th>DA
                                        <div class="tooltip"><i class="fa-regular fa-circle-question"></i>
                                            <p class="tooltiptext">
                                                <span>Domain authority</span><br>
                                                Search engine ranking score (1-100)
                                            </p>
                                        </div>
                                        </th>
                                        <th>Article Type</th>
                                        <th>Country/Region</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($publications as $data)
                                    <tr id="pub{{ $data->id }}">
                                        <td class="cpy_content">
                                            <div class="cpy_logo">
                                                <div class="cpy_logo_img">
                                                    <img src="{{ $data->image }}" class="img-fluid" alt="">
                                                </div>
                                                <span>
                                                    <a href="javascript:void(0)">{{ $data->title }}</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <?php 
                                                if($data->genres ?? ''){
                                                    $genres = json_decode($data->genres);
                                                    if(count($genres)>1){ ?>
                                                        <div class="tooltip tooltip_data"><i class="fa-regular fa-circle-question"></i>
                                                            <ul class="tooltiptext">
                                                            <?php 
                                                                $genres = json_decode($data->genres);
                                                                foreach($genres as $gen){
                                                                    $genre = (App\Models\Genre::where('id','=',$gen)->first()); ?>
                                                                        <li>{{ $genre->genre_name }}</li>
                                                                <?php     
                                                                    }
                                                                ?>
                                                            </ul>
                                                        </div> 
                                            <?php   }else{ ?>
                                                        <?php 
                                                            $genres = json_decode($data->genres);
                                                            foreach($genres as $gen){
                                                                $genre = (App\Models\Genre::where('id','=',$gen)->first()); ?>
                                                                {{ $genre->genre_name }}
                                                            <?php     
                                                                }
                                                            ?>
                                                <?php   }
                                                    }
                                                ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if($data->price == 0){
                                                    print_r('ASK');
                                                }else{ ?>
                                                    ${{ $data->price }}
                                        <?php    }
                                                    
                                            ?>
                                        </td>
                                        <td>{{ $data->turn_around_time }}</td>
                                        <td>{{ $data->domain_authority }}</td>
                                        <td>
                                            <?php 
                                                $article = $data->article_type;
                                                $articleType = (App\Models\ArticleType::where('id','=',$article)->first());
                                                print_r($articleType->article_type);    
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                $country = $data->country;
                                                $cntry = (App\Models\Country::where('id','=',$country)->first());
                                                print_r($cntry->country_name);
                                            ?>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <button id="scrollToTop" class="btn btn-warning d-none"><i class="fa-regular fa-circle-up"></i></button>
        </div>
            <!-- Press package starts here! -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="business_wrapper">

                                                <div class="business_content">
                  <h3>Starter</h3>
                  <div class="business_grid">
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$1530</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$1,530</span></h4>
                      <!-- <h4 class="retail_text">Retail: $1700 </h4> -->
                      <h4 class="retail_text">Retail Value: $1,700 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="NY Weekly">NY Weekly</li>
                                                                              <li class="LA Weekly">LA Weekly</li>
                                                                              <li class="Digital Journal">Digital Journal</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2880</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2,880</span></h4>
                      <!-- <h4 class="retail_text">Retail: $3200 </h4> -->
                      <h4 class="retail_text">Retail Value: $3,200 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="NY Weekly">NY Weekly</li>
                                                                              <li class="LA Weekly">LA Weekly</li>
                                                                              <li class="Digital Journal">Digital Journal</li>
                                                                              <li class="California Business Journal">California Business Journal</li>
                                                                              <li class="SF Examiner ">SF Examiner </li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$6440</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$6,440</span></h4>
                      <!-- <h4 class="retail_text">Retail: $7160 </h4> -->
                      <h4 class="retail_text">Retail Value: $7,160 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="NY Weekly">NY Weekly</li>
                                                                              <li class="LA Weekly">LA Weekly</li>
                                                                              <li class="Digital Journal">Digital Journal</li>
                                                                              <li class="California Business Journal">California Business Journal</li>
                                                                              <li class="SF Examiner ">SF Examiner </li>
                                                                              <li class="Ocean Drive ">Ocean Drive </li>
                                                                              <li class="LA Magazine">LA Magazine</li>
                                                  </ul>
                      </div>
                    </div>
                                      </div>
                </div>
                                                                <div class="business_content">
                  <h3>Business</h3>
                  <div class="business_grid">
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$1485</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$1,485</span></h4>
                      <!-- <h4 class="retail_text">Retail: $1650 </h4> -->
                      <h4 class="retail_text">Retail Value: $1,650 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="CEO Weekly">CEO Weekly</li>
                                                                              <li class="California Business Journal">California Business Journal</li>
                                                                              <li class="Digital Journal">Digital Journal</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$4635</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$4,635</span></h4>
                      <!-- <h4 class="retail_text">Retail: $5150 </h4> -->
                      <h4 class="retail_text">Retail Value: $5,150 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="CEO Weekly">CEO Weekly</li>
                                                                              <li class="California Business Journal">California Business Journal</li>
                                                                              <li class="Digital Journal">Digital Journal</li>
                                                                              <li class="LA Magazine">LA Magazine</li>
                                                                              <li class="Success Magazine">Success Magazine</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$9855</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$9,855</span></h4>
                      <!-- <h4 class="retail_text">Retail: $10950 </h4> -->
                      <h4 class="retail_text">Retail Value: $10,950 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="CEO Weekly">CEO Weekly</li>
                                                                              <li class="California Business Journal">California Business Journal</li>
                                                                              <li class="Digital Journal">Digital Journal</li>
                                                                              <li class="LA Magazine">LA Magazine</li>
                                                                              <li class="Success Magazine">Success Magazine</li>
                                                                              <li class="NASDAQ">NASDAQ</li>
                                                                              <li class="USA Today">USA Today</li>
                                                  </ul>
                      </div>
                    </div>
                                      </div>
                </div>
                                                                <div class="business_content">
                  <h3>High Tier</h3>
                  <div class="business_grid">
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$4950</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$4,950</span></h4>
                      <!-- <h4 class="retail_text">Retail: $5500 </h4> -->
                      <h4 class="retail_text">Retail Value: $5,500 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Digital Journal">Digital Journal</li>
                                                                              <li class="SF Examiner ">SF Examiner </li>
                                                                              <li class="USA Today">USA Today</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$10350</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$10,350</span></h4>
                      <!-- <h4 class="retail_text">Retail: $11500 </h4> -->
                      <h4 class="retail_text">Retail Value: $11,500 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Digital Journal">Digital Journal</li>
                                                                              <li class="SF Examiner ">SF Examiner </li>
                                                                              <li class="USA Today">USA Today</li>
                                                                              <li class="Metro">Metro</li>
                                                                              <li class="Daily Mail">Daily Mail</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$14400</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$14,400</span></h4>
                      <!-- <h4 class="retail_text">Retail: $16000 </h4> -->
                      <h4 class="retail_text">Retail Value: $16,000 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Digital Journal">Digital Journal</li>
                                                                              <li class="SF Examiner ">SF Examiner </li>
                                                                              <li class="USA Today">USA Today</li>
                                                                              <li class="Metro">Metro</li>
                                                                              <li class="Daily Mail">Daily Mail</li>
                                                                              <li class="Benzinga">Benzinga</li>
                                                                              <li class="NASDAQ">NASDAQ</li>
                                                  </ul>
                      </div>
                    </div>
                                      </div>
                </div>
                                                                <div class="business_content">
                  <h3>Sponsored</h3>
                  <div class="business_grid">
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$3600</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$3,600</span></h4>
                      <!-- <h4 class="retail_text">Retail: $4000 </h4> -->
                      <h4 class="retail_text">Retail Value: $4,000 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="JPost">JPost</li>
                                                                              <li class="The Morning Call">The Morning Call</li>
                                                                              <li class="Mercury News">Mercury News</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$6930</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$6,930</span></h4>
                      <!-- <h4 class="retail_text">Retail: $7700 </h4> -->
                      <h4 class="retail_text">Retail Value: $7,700 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="JPost">JPost</li>
                                                                              <li class="The Morning Call">The Morning Call</li>
                                                                              <li class="Mercury News">Mercury News</li>
                                                                              <li class="Review Journal">Review Journal</li>
                                                                              <li class="Dallas News">Dallas News</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$11880</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$11,880</span></h4>
                      <!-- <h4 class="retail_text">Retail: $13200 </h4> -->
                      <h4 class="retail_text">Retail Value: $13,200 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="JPost">JPost</li>
                                                                              <li class="The Morning Call">The Morning Call</li>
                                                                              <li class="Mercury News">Mercury News</li>
                                                                              <li class="Review Journal">Review Journal</li>
                                                                              <li class="Dallas News">Dallas News</li>
                                                                              <li class="Chron">Chron</li>
                                                                              <li class="Tampa Bay Times">Tampa Bay Times</li>
                                                  </ul>
                      </div>
                    </div>
                                      </div>
                </div>
                                                                <div class="business_content">
                  <h3>Tech</h3>
                  <div class="business_grid">
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2160</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2,160</span></h4>
                      <!-- <h4 class="retail_text">Retail: $2400 </h4> -->
                      <h4 class="retail_text">Retail Value: $2,400 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Geek Extreme">Geek Extreme</li>
                                                                              <li class="Tech Times">Tech Times</li>
                                                                              <li class="HackerNoon">HackerNoon</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$4320</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$4,320</span></h4>
                      <!-- <h4 class="retail_text">Retail: $4800 </h4> -->
                      <h4 class="retail_text">Retail Value: $4,800 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Geek Extreme">Geek Extreme</li>
                                                                              <li class="Tech Times">Tech Times</li>
                                                                              <li class="HackerNoon">HackerNoon</li>
                                                                              <li class="Grit Daily">Grit Daily</li>
                                                                              <li class="Benzinga">Benzinga</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$11340</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$11,340</span></h4>
                      <!-- <h4 class="retail_text">Retail: $12600 </h4> -->
                      <h4 class="retail_text">Retail Value: $12,600 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Geek Extreme">Geek Extreme</li>
                                                                              <li class="Tech Times">Tech Times</li>
                                                                              <li class="HackerNoon">HackerNoon</li>
                                                                              <li class="Grit Daily">Grit Daily</li>
                                                                              <li class="Benzinga">Benzinga</li>
                                                                              <li class="USA Today">USA Today</li>
                                                                              <li class="Geekwire">Geekwire</li>
                                                  </ul>
                      </div>
                    </div>
                                      </div>
                </div>
                                                                <div class="business_content">
                  <h3>Lifestyle / Luxury</h3>
                  <div class="business_grid">
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2115</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2,115</span></h4>
                      <!-- <h4 class="retail_text">Retail: $2350 </h4> -->
                      <h4 class="retail_text">Retail Value: $2,350 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Elite Luxury News">Elite Luxury News</li>
                                                                              <li class="Flaunt Magazine">Flaunt Magazine</li>
                                                                              <li class="Haute Living">Haute Living</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$7515</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$7,515</span></h4>
                      <!-- <h4 class="retail_text">Retail: $8350 </h4> -->
                      <h4 class="retail_text">Retail Value: $8,350 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Elite Luxury News">Elite Luxury News</li>
                                                                              <li class="Flaunt Magazine">Flaunt Magazine</li>
                                                                              <li class="Haute Living">Haute Living</li>
                                                                              <li class="Life and Style ">Life and Style </li>
                                                                              <li class="Daily Mail">Daily Mail</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$15165</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$15,165</span></h4>
                      <!-- <h4 class="retail_text">Retail: $16850 </h4> -->
                      <h4 class="retail_text">Retail Value: $16,850 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Elite Luxury News">Elite Luxury News</li>
                                                                              <li class="Flaunt Magazine">Flaunt Magazine</li>
                                                                              <li class="Haute Living">Haute Living</li>
                                                                              <li class="Life and Style ">Life and Style </li>
                                                                              <li class="Daily Mail">Daily Mail</li>
                                                                              <li class="Men&#039;s Journal">Men&#039;s Journal</li>
                                                                              <li class="Maxim">Maxim</li>
                                                  </ul>
                      </div>
                    </div>
                                      </div>
                </div>
                                                                <div class="business_content">
                  <h3>Entertainment</h3>
                  <div class="business_grid">
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$1575</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$1,575</span></h4>
                      <!-- <h4 class="retail_text">Retail: $1750 </h4> -->
                      <h4 class="retail_text">Retail Value: $1,750 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="LA Guest List">LA Guest List</li>
                                                                              <li class="LA Weekly">LA Weekly</li>
                                                                              <li class="Flaunt Magazine">Flaunt Magazine</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$3250</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$3,250</span></h4>
                      <!-- <h4 class="retail_text">Retail: $3610 </h4> -->
                      <h4 class="retail_text">Retail Value: $3,610 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="LA Guest List">LA Guest List</li>
                                                                              <li class="LA Weekly">LA Weekly</li>
                                                                              <li class="Flaunt Magazine">Flaunt Magazine</li>
                                                                              <li class="Film Daily">Film Daily</li>
                                                                              <li class="Hollywood Unlocked">Hollywood Unlocked</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$8650</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$8,650</span></h4>
                      <!-- <h4 class="retail_text">Retail: $9610 </h4> -->
                      <h4 class="retail_text">Retail Value: $9,610 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="LA Guest List">LA Guest List</li>
                                                                              <li class="LA Weekly">LA Weekly</li>
                                                                              <li class="Flaunt Magazine">Flaunt Magazine</li>
                                                                              <li class="Film Daily">Film Daily</li>
                                                                              <li class="Hollywood Unlocked">Hollywood Unlocked</li>
                                                                              <li class="Life and Style ">Life and Style </li>
                                                                              <li class="OK! Magazine ">OK! Magazine </li>
                                                  </ul>
                      </div>
                    </div>
                                      </div>
                </div>
                                                                <div class="business_content">
                  <h3>Music</h3>
                  <div class="business_grid">
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$1350</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$1,350</span></h4>
                      <!-- <h4 class="retail_text">Retail: $1500 </h4> -->
                      <h4 class="retail_text">Retail Value: $1,500 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="The Source">The Source</li>
                                                                              <li class="EarMilk">EarMilk</li>
                                                                              <li class="Digital Music News">Digital Music News</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$1845</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$1,845</span></h4>
                      <!-- <h4 class="retail_text">Retail: $2050 </h4> -->
                      <h4 class="retail_text">Retail Value: $2,050 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="The Source">The Source</li>
                                                                              <li class="EarMilk">EarMilk</li>
                                                                              <li class="Digital Music News">Digital Music News</li>
                                                                              <li class="Music Times">Music Times</li>
                                                                              <li class="Artist weekly">Artist weekly</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$2925</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$2,925</span></h4>
                      <!-- <h4 class="retail_text">Retail: $3250 </h4> -->
                      <h4 class="retail_text">Retail Value: $3,250 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="The Source">The Source</li>
                                                                              <li class="EarMilk">EarMilk</li>
                                                                              <li class="Digital Music News">Digital Music News</li>
                                                                              <li class="Music Times">Music Times</li>
                                                                              <li class="Artist weekly">Artist weekly</li>
                                                                              <li class="Notion Online">Notion Online</li>
                                                                              <li class="Dancing Astronaut">Dancing Astronaut</li>
                                                  </ul>
                      </div>
                    </div>
                                      </div>
                </div>
                                                                <div class="business_content">
                  <h3>Crypto</h3>
                  <div class="business_grid">
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$1620</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$1,620</span></h4>
                      <!-- <h4 class="retail_text">Retail: $1800 </h4> -->
                      <h4 class="retail_text">Retail Value: $1,800 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Crypto News">Crypto News</li>
                                                                              <li class="Cryptopolitan">Cryptopolitan</li>
                                                                              <li class="Zycrypto">Zycrypto</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2970</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2,970</span></h4>
                      <!-- <h4 class="retail_text">Retail: $3300 </h4> -->
                      <h4 class="retail_text">Retail Value: $3,300 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Crypto News">Crypto News</li>
                                                                              <li class="Cryptopolitan">Cryptopolitan</li>
                                                                              <li class="Zycrypto">Zycrypto</li>
                                                                              <li class="LA Weekly">LA Weekly</li>
                                                                              <li class="News BTC (Press Release)">News BTC (Press Release)</li>
                                                  </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                    <!-- <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$7920</span></h4> -->
                      <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$7,920</span></h4>
                      <!-- <h4 class="retail_text">Retail: $8800 </h4> -->
                      <h4 class="retail_text">Retail Value: $8,800 </h4>
                      
                      <div class="business_list">
                                                <h5>Publications</h5>
                        <ul class="m-0">
                                                                              <li class="Crypto News">Crypto News</li>
                                                                              <li class="Cryptopolitan">Cryptopolitan</li>
                                                                              <li class="Zycrypto">Zycrypto</li>
                                                                              <li class="LA Weekly">LA Weekly</li>
                                                                              <li class="News BTC (Press Release)">News BTC (Press Release)</li>
                                                                              <li class="Bitcoin.com (Press release)">Bitcoin.com (Press release)</li>
                                                                              <li class="IB Times USA">IB Times USA</li>
                                                  </ul>
                      </div>
                    </div>
                                      </div>
                </div>
                                
              </div>
            </div>
            <!-- Press release start here -->
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"  style=" height: 100vh;">
              <div class="business_wrapper">
                <div class="business_content">
                  <h3>Publications</h3>
                  <div class="business_grid">
                                        <div class="business_wreap">
                      <!-- <h4 class="bundle_text"><span>Price</span> <span class="business_price">$850</span></h4> -->
                      <h4 class="bundle_text"><span>Price</span> <span class="business_price">$850</span></h4>
                      <p style="font-size: 14px !important;">15 Yahoo Sites, AP News, Market Watch, Benzinga, Digital journal &amp; 200+ smaller sites</p>
                    </div>
                                        <div class="business_wreap">
                      <!-- <h4 class="bundle_text"><span>Price</span> <span class="business_price">$950</span></h4> -->
                      <h4 class="bundle_text"><span>Price</span> <span class="business_price">$950</span></h4>
                      <p style="font-size: 14px !important;">20 Yahoo Sites, Bloomberg, Street Insider, Benzinga, Market watch, Digital Journal &amp; 200+ smaller sites (Nasdaq 95% chance)</p>
                    </div>
                                        <div class="business_wreap">
                      <!-- <h4 class="bundle_text"><span>Price</span> <span class="business_price">$1150</span></h4> -->
                      <h4 class="bundle_text"><span>Price</span> <span class="business_price">$1,150</span></h4>
                      <p style="font-size: 14px !important;">20 Yahoo Sites, Business Insider, Bloomberg, AP News, Market Watch, Fox Affiliation, Digital Journal &amp; 200 smaller sites (benzinga 75% chance)</p>
                    </div>
                                      </div>
                </div>
              </div>
            </div>
            <!-- Other service start here -->
            <div class="tab-pane fade" id="pills-services" role="tabpanel" aria-labelledby="pills-services-tab" style=" height: 100vh;">
              <div class="business_wrapper">
                <div class="business_content">
                  <h3>Other Services</h3>
                  <div class="business_grid">
                                        <div class="business_wreap">
                      <h4 class="bundle_text"><span>PR services</span></h4>
                      <div class="business_list">
                        <!-- <h5>Publications</h5> -->
                                                <ul class="m-0">
                           <li>Monthly Press Packages</li>
                             <li>Press Listicles (e.g. top 10 entrepreneurs)</li>
                             <li>Reputation management (press removal, de-index links in Google)</li>
                             <li>Printed magazine publications</li>
                             <li>Podcast Placements</li>
                             <li>TV Placements</li>
                             <li>Wikipedia creation</li>
                             <li>Google knowledge panel creation</li>
                             <li>Wiki authority packages</li>
                             <li>Crunchbase creation</li>
                            
                        </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                      <h4 class="bundle_text"><span>Social media services</span></h4>
                      <div class="business_list">
                        <!-- <h5>Publications</h5> -->
                                                <ul class="m-0">
                           <li>Social Media Verification packages (Obtain verified checkmark)</li>
                             <li>Username claims (Claim your desired username)</li>
                             <li>Hacked account recoveries</li>
                             <li>Account unbans</li>
                             <li>Engagement services</li>
                             <li>Monetization services</li>
                             <li>Instagram / Facebook video removal</li>
                             <li>Youtube video removal</li>
                            
                        </ul>
                      </div>
                    </div>
                                        <div class="business_wreap">
                      <h4 class="bundle_text"><span>Other services</span></h4>
                      <div class="business_list">
                        <!-- <h5>Publications</h5> -->
                                                <ul class="m-0">
                           <li>Google SEO Optimisation</li>
                             <li>Music Streaming services</li>
                             <li>Label distribution services</li>
                             <li>Spotify top 50 charting for your desired country</li>
                             <li>Author Best sellers (Amazon, WSJ &amp; more)</li>
                             <li>Review Services</li>
                            
                        </ul>
                      </div>
                    </div>
                                      </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <footer class="footer_wrapper charge_color">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer_content">
            <p>© 2023 PR Partners International</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.jquery.min.js"></script>
    <script src="{{ asset('/pr/js/script.js') }}"></script>

  <script>
        $(document).ready(function(){
            var prices = '';
            var countries = '';
            var genres = [];
            var articletype = [];
            var publicationname = '';
            var minprice = '';
            var maxprice = '';

            $(".noUi-handle").on("click", function () {
                $(this).width(50);
            });
            var rangeSlider = document.getElementById("slider-range");
            var moneyFormat = wNumb({
                decimals: 0,
                thousand: ",",
                prefix: "$"
            });
            noUiSlider.create(rangeSlider, {
                start: [0, 30000],
                step: 1,
                range: {
                min: [0],
                max: [30000]
                },
                format: moneyFormat,
                connect: true
            });

    // Set visual min and max values and also update value hidden form inputs
            rangeSlider.noUiSlider.on("update", function (values, handle) {
                document.getElementById("slider-range-value1").innerHTML = values[0];
                document.getElementById("slider-range-value2").innerHTML = values[1];
                document.getElementsByName("min-value").value = moneyFormat.from(values[0]);
                document.getElementsByName("max-value").value = moneyFormat.from(values[1]);
                
                $('#slider-range').click(function(){
                    min = $('#slider-range-value1').html().replace('$','');
                    max = $('#slider-range-value2').html().replace('$','');
                    min_price = min.replace(',','');
                    max_price = max.replace(',','');
                    minprice = min_price;
                    maxprice = max_price;

                    publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
                })
            });

            $('#exampleFormControlSelect1').change(function(){
                var price = $(this).val();
                prices = price;
                publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
            });
            
            $('#formGroupExampleInput1').change(function(){
                var country = $(this).val();
                countries = country;
                publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
            });

            $('.checkgenre').change(function(){
                if(this.checked){
                    var genre = $(this).val(); 
                    $('#genid'+genre).addClass('selected');
                    $('.selected').css('background','rgba(146, 92, 3, 0.17)');
                    $('.selected').css('color','#925C03');
                    genres.push(genre);
                    publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
                }
            });

            $('.checkarticle').change(function(){
                if(this.checked){
                    var article = $(this).val();
                    $('#a_id'+article).addClass('checked');
                    $('.checked').css('background','rgba(146, 92, 3, 0.17)');
                    $('.checked').css('color','#925C03');
                    articletype.push(article);
                    publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
                }
            });

            $('#formGroupExampleInput').keyup(function(){
                var name = $(this).val();
                publicationname = name;
                publication(prices,countries,genres,articletype,publicationname,minprice,maxprice);
            });

            function  publication(prices,countries,genres,articletype,publicationname,minprice,maxprice){
                var data = {
                    name:publicationname,
                    price:prices,
                    country:countries,
                    genre:genres,
                    articletype:articletype,
                    minprice:minprice,
                    maxprice:maxprice,
                    _token: "{{ csrf_token() }}"
                }
                $.ajax({
                    url:"{{ url('publicationname') }}",
                    type: "POST",
                    data: data,
                    dataType: "JSON",
                    success: function(response){ 
                        console.log(response);
                        data = [];
                        if(response[0] == "" || response[1] == ""){
                            var html1 = '<span>Nothing here...</span>' ;
                            var total = response[2];
                            $('.publications_show').html('<span>Showing 0 of '+total+' publications</span>');
                            data.push(html1);
                        }else{
                            allpublication = response[0];
                            genres = response[1];
                            total = response[2];
                            result = allpublication.length;
                            num = 0;

                            for(i=0; i<allpublication.length; i++){
                                genre = [];
                                $.each(genres[i],function(key,val){
                                    genrename = val.genre_name;
                                    genre.push(genrename);
                                });

                                if(genres[i].length>1){
                                    genress = '<div class="tooltip tooltip_data"><i class="fa-regular fa-circle-question"></i><ul class="tooltiptext"><li>'+genre+'</li></ul></div>';
                                }else{
                                    genress = genre;
                                }

                                if(allpublication[i].price == 0){
                                    price = 'ASK';
                                }else{
                                    price = '$'+allpublication[i].price+'';
                                }

                                var html = '<tr id="pub'+allpublication[i].id+'"><td class="cpy_content"><div class="cpy_logo"><div class="cpy_logo_img"><img src="'+allpublication[i].image+'" class="img-fluid" alt=""></div><span><a href="javascript:void(0)">'+allpublication[i].title+'</a></span></div></td><td>'+genress+'</td><td>'+price+'</td><td>'+allpublication[i].turn_around_time+'</td><td>'+allpublication[i].domain_authority+'</td><td>'+allpublication[i].article_type.article_type+'</td><td>'+allpublication[i].country.country_name+'</td></tr>';
                                data.push(html);
                                
                                num = num + 1;
                                $('.publications_show').html('<span>Showing '+result+' of '+total+' publications</span>');
                            }
                        }
                        $('tbody').html(data);
                    }
                });
            }
        });
        
    </script>
</body>
</html>


