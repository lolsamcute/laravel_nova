  <!-- ========== Left Sidebar Start ========== -->
  <div class="vertical-menu">

      <div data-simplebar class="h-100">

          <!--- Sidemenu -->
          <div id="sidebar-menu">
              <!-- Left Menu Start -->
              <ul class="metismenu list-unstyled" id="side-menu">


                  <li>
                      <a href="/app/dashboard">
                          <i data-feather="home"></i>
                          <span data-key="t-dashboard">Dashboard</span>
                      </a>
                  </li>

                  <li>
                      <a href="javascript: void(0);" class="has-arrow">
                          <i data-feather="grid"></i>
                          <span data-key="t-apps">Users</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li>
                              <a href="/app/user">
                                  <span data-key="t-calendar">All Users</span>
                              </a>
                          </li>

                          <li>
                              <a href="/app/kreators">
                                  <span data-key="t-chat">Kreators</span>
                              </a>
                          </li>

                          <li>
                              <a href="/app/affiliates">
                                  <span data-key="t-chat">Affiliates</span>
                              </a>
                          </li>


                      </ul>
                  </li>


                  <li>
                      <a href="/app/store">
                          <i data-feather="users"></i>
                          <span data-key="t-authentication">Stores</span>
                      </a>

                  </li>

                  <li>
                      <a href="/app/products">
                          <i data-feather="file-text"></i>
                          <span data-key="t-pages">Products</span>
                      </a>
                  </li>

                  <li>
                      <a href="javascript: void(0);" class="has-arrow">
                          <i data-feather="layout"></i>
                          <span data-key="t-horizontal">Sales & Withdrawal</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">
                          <li>
                              <a href="{{ route('transactions') }}">
                                  <span data-key="t-calendar">Transactions & Revenue</span>
                              </a>
                          </li>

                          <li>
                              <a href="{{ route('withdrawal') }}">
                                  <span data-key="t-chat">Withdrawal</span>
                              </a>
                          </li>
                      </ul>
                  </li>



                  <li>
                      <a href="/app/blog">
                          <i data-feather="briefcase"></i>
                          <span data-key="t-components">Blog Post</span>
                      </a>
                  </li>

                  <li>
                      <a href="/app/mailing">
                          <i data-feather="gift"></i>
                          <span data-key="t-ui-elements">Mailing List</span>
                      </a>
                  </li>

                  <li>
                      <a href="javascript: void(0);" class="has-arrow">
                          <i data-feather="box"></i>
                          <span data-key="t-horizontal">Support</span>
                      </a>
                      <ul class="sub-menu" aria-expanded="false">

                          <li>
                              <a href="{{ route('tickets') }}">
                                  <span data-key="t-chat">Tickets</span>
                              </a>
                          </li>

                          <li>
                              <a href="/ticket/incidents">
                                  <span data-key="t-calendar">Incidents</span>
                              </a>
                          </li>


                          <li>
                              <a href="/ticket/paymentIntegration">
                                  <span data-key="t-chat">Payment Integration</span>
                              </a>
                          </li>
                      </ul>


                  </li>

                  <li>
                      <a href="/app/user/roles">
                          <i data-feather="sliders"></i>
                          <span data-key="t-tables">Admin Roles</span>
                      </a>
                  </li>

                  <li>
                      <a href="javascript: void(0);">
                          <i data-feather="pie-chart"></i>
                          <span data-key="t-charts">Recruitment</span>
                      </a>
                  </li>

                  <li>
                      <a href="javascript: void(0);">
                          <i data-feather="cpu"></i>
                          <span data-key="t-icons">Settings</span>
                      </a>
                  </li>




              </ul>



              <div class="mt-5">
                  <a class="btn btn-primary btn-rounded col-lg-10" href="{{ url('logout') }}"
                      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      <i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout

                      <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </a>

              </div>

          </div>
          <!-- Sidebar -->
      </div>
  </div>
  <!-- Left Sidebar End -->
