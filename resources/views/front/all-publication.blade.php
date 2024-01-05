<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&amp;family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.css">

    <link rel="stylesheet" href="{{ asset('/pr/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/pr/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/pr/css/spinner.css') }}" >
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <title>All publication page</title>
</head>
<body class="bg_color" style="">
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
                            minimum amount of 100$.<b>
                            </p>
                        </div>
                    </div>
                    <div class="tab_btn">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All Publication</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Press Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Press Release</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-services-tab" data-toggle="pill" href="#pills-services" role="tab" aria-controls="pills-services" aria-selected="false">Other Services</a>
                            </li>
                        </ul>
                        <div class="ques_btn">
                            <a class="btn" href="javascript:void(0)" role="button">Download PR Questionnaire</a>
                        </div>
                    </div>
                    <div class="tab_wrapper">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                                                        <option>Price (Asc)</option>
                                                        <option>lorem ipsum</option>
                                                        <option>lorem ipsum</option>
                                                        <option>lorem ipsum</option>
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
                                                <div id="slider-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                                </div>
                                                <div class="slider-labels">
                                                    <div class="caption">
                                                        <span id="slider-range-value1">$0</span>
                                                    </div>
                                                    <div class="text-right caption">
                                                        <span id="slider-range-value2">$32232</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="hidden" name="min-value" value="">
                                                    <input type="hidden" name="max-value" value="">
                                                </div>
                                            </div>
                                            <div class="form-group wrapper">
                                                <label for="formGroupExampleInput">Select regions</label>
                                                <select multiple="" data-placeholder="Select regions">
                                                    @foreach($countries as $cnt)
                                                    <option>{{ $cnt->country_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="select_wreap">
                                                <h3>Select genres</h3>
                                                <div class="publication_list">
                                                    @foreach($genres as $genr)
                                                    <input type="checkbox" id="genres{{$genr->id}}" style="display:none;">
                                                    <label for="genres{{$genr->id}}"> <a href="javascript:void(0)">{{ $genr->genre_name }}</a></label>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="select_wreap">
                                                <h3>Article Type</h3>
                                                <div class="publication_list">
                                                    @foreach($articles as $art)
                                                    <input type="checkbox" id="atype{{ $art->id }}" style="display:none;">
                                                    <label for="atype{{ $art->id }}"><a href="javascript:void(0)">{{ $art->article_type }}</a></label>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="ques_btn">
                                                <a class="btn" href="javascript:void(0)" role="button">Reset all filters</a>
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
                                                        <th>DA
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
                                                        </td>
                                                        <td>{{ $data->price }}</td>
                                                        <td>{{ $data->turn_around_time }}</td>
                                                        <td>{{ $data->domain_authority }}</td>
                                                        <td>
                                                            <?php 
                                                                $article = json_decode($data->article_type);
                                                                foreach($article as $at){
                                                                    $articleType = (App\Models\ArticleType::where('id','=',$at)->first());
                                                                    print_r($articleType->article_type);
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                $country = json_decode($data->country);
                                                                foreach($country as $ct){
                                                                    $countries = (App\Models\Country::where('id','=',$ct)->first());
                                                                    print_r($countries->country_name);
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="business_wrapper">
                                <div class="business_content">
                                    <h3>Business</h3>
                                    <div class="business_grid">
                                        <div class="business_wreap">
                                            <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2,800</span></h4>
                                            <h4 class="retail_text">Retail: $3,200</h4>
                                            <div class="business_list">
                                                <h5>Publication</h5>
                                                <ul class="m-0">
                                                    <li>LA Weekly</li>
                                                    <li>IB Times (SG)</li>
                                                    <li>Digital Journal</li>
                                                    <li>NY Weekly</li>
                                                    <li>Daily Scanner</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2,800</span></h4>
                                        <h4 class="retail_text">Retail: $3,200</h4>
                                        <div class="business_list">
                                        <h5>Publication</h5>
                                        <ul class="m-0">
                                            <li>LA Weekly</li>
                                            <li>IB Times (SG)</li>
                                            <li>Digital Journal</li>
                                            <li>NY Weekly</li>
                                            <li>Daily Scanner</li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$2,800</span></h4>
                                        <h4 class="retail_text">Retail: $3,200</h4>
                                        <div class="business_list">
                                        <h5>Publication</h5>
                                        <ul class="m-0">
                                            <li>LA Weekly</li>
                                            <li>IB Times (SG)</li>
                                            <li>Digital Journal</li>
                                            <li>NY Weekly</li>
                                            <li>Daily Scanner</li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="business_content">
                                <h3>Entertainment</h3>
                                <div class="business_grid">
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2,800</span></h4>
                                        <h4 class="retail_text">Retail: $3,200</h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2,800</span></h4>
                                        <h4 class="retail_text">Retail: $3,200</h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$2,800</span></h4>
                                        <h4 class="retail_text">Retail: $3,200</h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="business_content">
                                <h3>Crypto</h3>
                                <div class="business_grid">
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2,800</span></h4>
                                        <h4 class="retail_text">Retail: $3,200</h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2,800</span></h4>
                                        <h4 class="retail_text">Retail: $3,200</h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$2,800</span></h4>
                                        <h4 class="retail_text">Retail: $3,200</h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="business_content">
                                <h3>Music</h3>
                                <div class="business_grid">
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Bundle 1</span> <span class="business_price">$2,800</span></h4>
                                        <h4 class="retail_text">Retail: $3,200</h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Bundle 2</span> <span class="business_price">$2,800</span></h4>
                                        <h4 class="retail_text">Retail: $3,200</h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Bundle 3</span> <span class="business_price">$2,800</span></h4>
                                        <h4 class="retail_text">Retail: $3,200</h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="business_wrapper">
                            <div class="business_content">
                                <h3>Publications</h3>
                                <div class="business_grid">
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Price</span> <span class="business_price">$600</span></h4>
                                        <p>8 Yahoo sites with Yahoo finance and News</p>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Price</span> <span class="business_price">$800</span></h4>
                                        <p>20+ Yahoo sites, Benzinga, Morning watch, Digital journal, Market watch, Street insider</p>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Price</span> <span class="business_price">$600</span></h4>
                                        <p>8 Yahoo sites with Yahoo finance and News</p>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Price</span> <span class="business_price">$600</span></h4>
                                        <p>8 Yahoo sites with Yahoo finance and News</p>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Price</span> <span class="business_price">$600</span></h4>
                                        <p>8 Yahoo sites with Yahoo finance and News</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-services" role="tabpanel" aria-labelledby="pills-services-tab">
                        <div class="business_wrapper">
                            <div class="business_content">
                                <h3>Other Services</h3>
                                <div class="business_grid">
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>PR services</span></h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Social media services</span></h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="business_wreap">
                                        <h4 class="bundle_text"><span>Other services</span></h4>
                                        <div class="business_list">
                                            <h5>Publication</h5>
                                            <ul class="m-0">
                                                <li>LA Weekly</li>
                                                <li>IB Times (SG)</li>
                                                <li>Digital Journal</li>
                                                <li>NY Weekly</li>
                                                <li>Daily Scanner</li>
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
            $('#formGroupExampleInput').keyup(function(){
                var publicationName = $('#formGroupExampleInput').val();
                var data = {
                    name: publicationName,
                    _token: "{{ csrf_token() }}"
                }
                $.ajax({
                    url:"{{ url('publicationname') }}",
                    type: "POST",
                    data: data,
                    dataType: "JSON",
                    success: function(response){
                        data = [];
                        $.each(response, function(key,val){
                            genr = val.genres;
                            // console.log(genr);
                            var html = '<tr id="pub'+val.id+'"><td class="cpy_content"><div class="cpy_logo"><div class="cpy_logo_img"><img src="'+val.image+'" class="img-fluid" alt=""></div><span><a href="javascript:void(0)">'+val.title+'</a></span></div></td><td><div class="tooltip tooltip_data"><i class="fa-regular fa-circle-question"></i><ul class="tooltiptext"><li>'+genr+'</li></ul></div></td><td>'+val.price+'</td><td>'+val.turn_around_time+'</td><td>'+val.domain_authority+'</td><td>'+val.article_type+'</td><td>'+val.country+'</td></tr>';
                            data.push(html);
                        });
                        $('tbody').html(data);
                    }
                });
            });
        });
    </script>

</body>
</html>