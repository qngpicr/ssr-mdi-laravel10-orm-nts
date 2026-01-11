<div class="main_header_part">
  <div class="main_header">

    <!-- 메인 로고 -->
    <div class="main_header_line2_1_000">
      <div class="main_header_line2_2_update">
        <div class="main_header_line2_3_Logo" style="margin-right: -18px;">
          <div class="main_header_menu_content1_Logo">
            <div class="Module_Layout_1_1_1_title_0"
                 style="font-size: 13px; margin-bottom: 2px;">MDI</div>
          </div>
        </div>

        <div class="main_header_line2_3_update_outer">
          <div class="main_header_line2_3_update">
            <div class="main_header_menu_content1_update_title">
              <a href="{{ url('/') }}">
                {{ $CurrentDbLabel ?? 'MDI-LRV10' }}
              </a>
            </div>
          </div>
          <div class="main_header_line2_3_update"></div>
        </div>
      </div>
    </div>
    <!-- 메인 로고 끝 -->

    <!-- 메인 메뉴 -->
    <div class="main_header_line2_1_001">

      <div class="drop2">
        <div class="drop1_menu0">
          <div class="drop1_menu_title_false">
            <a href="#"></a>
          </div>
          <div class="drop1_menu_title_true">

            <!-- 프로세서 검색 -->
            <div class="drop1_menu_title_true_1">
              <div class="drop1_menu_title_true_1_title1">
                <div class="drop1_menu_title_true_1_title1_text">
                  <a>프로세서 검색</a>
                </div>
              </div>
              <div class="drop1_menu_title_true_1_title_semi">
                <div class="drop1_menu_title_true_1_title_semi1" style="margin-top: 3px;">
                  <a>프로세서 명칭으로 검색하세요.</a>
                </div>
              </div>

              <div class="drop1_menu_title_true_1_title2">
                <div class="drop1_menu_title_true_1_title1_text">
                  <a>디바이스 검색</a>
                </div>
              </div>
              <div class="drop1_menu_title_true_1_title_semi">
                <div class="drop1_menu_title_true_1_title_semi1" style="margin-top: 8px;">
                  <a>디바이스 명칭으로 검색하세요.</a>
                </div>
              </div>
            </div>

            <!-- 검색창 프래그먼트 -->
            <div class="drop1_menu_title_true_1" style="margin-left: 30px; margin-right: 40px;">
              <div class="drop1_menu_title_true_1_title1_search">
                @include('fragments.cpuSearch')
              </div>
              <div class="drop1_menu_title_true_1_title2_search">
                @include('fragments.deviceSearch')
              </div>
            </div>

            <!-- 베이스 메뉴 -->
            <div class="drop1_menu_title_true_1" style="margin-left: 210px; margin-top: 40px">
              <div class="drop1_menu_title_true_1_title1_base" style="margin-top: -8px;">
                <div class="drop1_menu_title_true_1_title1_icon">
                  <div class="Module_Layout_1_1_1_1_0">
                    <a style="font-size: 18px; text-shadow: -2px 0px black, 0px 2px black, 2px 0px black, 0px -2px black;">B1</a>
                  </div>
                </div>
                <div class="drop1_menu_title_true_1_title1_text_base">
                  <a style="font-size: 18px;" href="{{ url('base') }}">프로세서 베이스 확인하기</a>
                </div>
              </div>

              <div class="drop1_menu_title_true_1_title1_base" style="margin-top: 52px;">
                <div class="drop1_menu_title_true_1_title1_icon">
                  <div class="Module_Layout_1_1_1_1_0">
                    <a style="font-size: 18px; text-shadow: -2px 0px black, 0px 2px black, 2px 0px black, 0px -2px black;">B2</a>
                  </div>
                </div>
                <div class="drop1_menu_title_true_1_title1_text_base">
                  <a style="font-size: 18px;" href="{{ url('base#Module_Layout_1_device') }}">디바이스 베이스 확인하기</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- 프로세서 목록 -->
      <div class="main_header_line2_3_000">
        <div class="main_header_menu_content1">
          <div class="drop2_title">
            <div class="drop_yet0"><a>P1</a></div>
            <div class="drop_yet1">
              <a href="{{ url('cpus') }}" style="color: white">프로세서 목록</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 디바이스 목록 -->
      <div class="main_header_line2_3_000">
        <div class="main_header_menu_content1">
          <div class="drop2_title">
            <div class="drop_yet0"><a>D1</a></div>
            <div class="drop_yet1">
              <a href="{{ url('devices') }}" style="color: white">디바이스 목록</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 베이스 -->
      <div class="main_header_line2_3_000">
        <div class="main_header_menu_content1">
          <div class="drop2_title">
            <div class="drop_yet0"><a>B</a></div>
            <div class="drop_yet1">
              <a href="{{ url('base') }}" style="color: white;">베이스</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- 메인 메뉴 끝 -->

    <!-- 로그인 -->
    <div class="main_header_line2_1_003">
      <div class="main_header_line2_3_003">
        <div class="main_header_menu_content4">
          <div class="drop2_title" style="margin-top: 2px; width: 200px;">
            <div class="drop2_user" id="user-info">
              @if(session('loginUser'))
                <a href="{{ url('member/detail') }}" style="color: white;">
                  {{ session('loginUser') }}님
                </a>
                <a href="{{ url('logout') }}" style="margin-left: 8px;">로그아웃</a>
              @else
                <a href="{{ url('login') }}">로그인</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 로그인 끝 -->

  </div>
</div>
