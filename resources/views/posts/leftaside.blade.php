
<!-- start left side-->
      <div class="aside-left">
        <div class="profile-intro">
          <div class="title">
            <span class="title-name"><img src="/uploads/images/{{Auth()->user()->profile_image}}" width="40px" height="40px" style="border-radius: 20px">
            </span>
            <span class="title-name">
              <h4 style="margin-left: -15px">
                <b>{{Auth()->user()->name}}</b>
              </h4>
            </span>
          </div>
          <hr class="hr">
          <div class="title">
            <span class="title-name">Category</span>
            <ul class="my-dropdown">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="title-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#">Edit</a></li>
                  </ul>
              </li>
            </ul>
          </div>
          <hr class="hrL">
          @foreach ($categories as $category)
           
          
          <table class="tab">
            <span>
              <tr> 
                  <th>
                    <div class="divCat" style="cursor:pointer">
                       <a href="{{ route('category.showAll', [$category->name]) }}" 
                        style="text-decoration: none;color:#666">
                        {{ $category->name }}
                      </a>
                    </div>
                  </th>
               </tr>
              </span>
            </table>
            @endforeach
            <hr class="hr">
            <div class="title">
                <span class="title-name">Compeition</span>
                
                <ul class="my-dropdown">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="title-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Edit</a></li>
                        </ul>
                    </li>
                </ul>
                
            </div>
            <hr class="hrL">
            
            <table>
            
                <tr> 
                        <th>
                            <div class="divCat">
                                <a>Literature</a>
                            </div>
                        </th>
                        <th><div class="divCatc"></div></th>
                        <th>
                            <div class="divCat"><a>Drawing</a></div>
                        </th>
                     </tr>
                    
                     <tr>
                         <th>
                             <div class="divCat"><a>Art</a></div>
                         </th>
                         <th><div class="divCatc"></div></th> 
                         <th> 
                             <div class="divCat"><a>Dancing</a></div>
                         </th>
                     </tr>
            
            </table>
            
            <hr class="hr">
            
              <div class="items-play">
            <p><span> &copy;  2019 ITalent About Us Help
                Terms Privacy policy
                Marketing Bussiness Developers</span> </p>
                <a href="https://play.google.com/store?hl=ar">
                <button style='font-size:24px'>Google Play <i class='fab fa-google-play'></i></button>
                </a>
            </div>
        </div>
        
    </div>
                    
      <!-- end left side--> 