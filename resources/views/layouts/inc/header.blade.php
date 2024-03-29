@include('layouts.inc.head')

<body class="horizontal-layout horizontal-menu 2-columns menu-expanded" data-open="hover" data-menu="horizontal-menu"
    data-col="2-columns">
    <span id="hdata" data-df="dd-mm-yyyy" data-curr="$"></span>
    <!-- fixed-top-->
    <nav  class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top   navbar-border navbar-brand-center">

        <div class="navbar-wrapper">

            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item " ><a  class="navbar-brand" href="{{Route('dashboard')}}">Digital Accountance
                        </a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                <a style="margin-left:50px; position:absolute;" href="#"><img height="50" src="{{asset('uploads/company/default.jpg')}}" alt=""></a>
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="ft-menu"></i></a></li>

                    </ul>

                    <ul class="nav navbar-nav float-right">


                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown"><span class="avatar avatar-online"><img
                                        src="{{asset('dashjscss')}}/userfiles/employee/thumbnail/example.png" alt="avatar"><i></i></span><span
                                    class="user-name">Account</span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="{{Route('view_employee',Auth::user()->id)}}"><i class="ft-user"></i> Profile</a>
                                <a href="{{Route('admin_attendance')}}" class="dropdown-item"><i
                                        class="fa fa-list-ol"></i>Attendance</a>
                                <a href="{{Route('admin_holidays')}}" class="dropdown-item"><i class="fa fa-hotel"></i>Holidays</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
      <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- Horizontal navigation-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border"
        role="navigation" data-menu="menu-wrapper">
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">

            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a class="nav-link" href="{{Route('dashboard')}}"><i
                            class="icon-speedometer"></i><span>Dashboard</span></a>

                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="icon-basket-loaded"></i><span>Sales</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                    class="icon-paper-plane"></i>Quotation</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="{{Route('pos_invoices_create')}}"
                                        data-toggle="dropdown">New Quotation</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="{{Route('pos_invoices')}}"
                                        data-toggle="dropdown">Quotation List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                        class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                            class="icon-handbag"></i> PO Setup</a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="{{Route('new_purches')}}" data-toggle="dropdown"> PO
                                Entry</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{Route('purches')}}" data-toggle="dropdown">PO List
                                </a>
                        </li>


                    </ul>
                </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                    class="icon-basket"></i>Challan/Delivery Notes</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="{{Route('new_invoice')}}"
                                        data-toggle="dropdown">New Challan</a>
                                </li>

                                <li data-menu=""><a class="dropdown-item" href="{{Route('invoices')}}" data-toggle="dropdown">Chalan List</a>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                    class="icon-call-out"></i>Invoice</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="{{Route('new_quote')}}"
                                        data-toggle="dropdown">Create Invoice</a>
                                </li>

                                <li data-menu=""><a class="dropdown-item" href="{{Route('quotes')}}" data-toggle="dropdown">Invoice List
                                        </a>
                            </ul>
                        </li>


                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                    class="ft-radio"></i>Product & Services</a>
                            <ul class="dropdown-menu">

                                <li data-menu=""><a class="dropdown-item" href="{{Route('subscriptions')}}"
                                        data-toggle="dropdown">Unit Setup</a></li>
                                        <li data-menu=""><a class="dropdown-item" href="{{Route('add_product')}}"
                                        data-toggle="dropdown">Create Product</a>
                                </li>
                                        <li data-menu=""><a class="dropdown-item" href="{{Route('viewProduct2')}}"
                                        data-toggle="dropdown">Product List</a>
                                </li>
                            </ul>


                             <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                    class="ft-radio"></i>Customer</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="{{Route('create_customer')}}"
                                        data-toggle="dropdown">Create Customer</a>
                                </li>

                                <li data-menu=""><a class="dropdown-item" href="{{Route('customers')}}"
                                        data-toggle="dropdown">Customer List</a>
                            </ul>
                        </li>
                    </ul>
                </li>



                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="ft-layers"></i><span>Purchase</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                    class="ft-list"></i>Vendor</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="{{Route('add_product2')}}" data-toggle="dropdown">
                                        Create vendor</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="{{Route('products')}}" data-toggle="dropdown">vendor List
                                        </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                    class="ft-list"></i>Purchase</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="{{Route('new_purchase')}}" data-toggle="dropdown">
                                        New Purchase</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="{{Route('purchase.list')}}" data-toggle="dropdown">Purchase List
                                        </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                    class="ft-list"></i>Bill</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="{{Route('create_bill')}}" data-toggle="dropdown">
                                        Create Bill</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="{{Route('bills')}}" data-toggle="dropdown">Bill List
                                        </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                    class="ft-list"></i>Product</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="{{Route('add_buy_product')}}" data-toggle="dropdown">
                                        Add Product</a>
                                </li>

                            </ul>
                        </li>
                </li>


            </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                    data-toggle="dropdown"><i class="icon-diamond"></i><span>Accounting</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="ft-users"></i>Basic Setup</a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="{{Route('add_account')}}"
                                    data-toggle="dropdown">Create Account Head</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="ft-users"></i>Oppening Balance</a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="{{Route('fixed_asset')}}"
                                    data-toggle="dropdown">Fixed Asset</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="{{Route('investment')}}" data-toggle="dropdown">Investment</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="fa fa-ticket"></i>Income</a>
                        <ul class="dropdown-menu">
                            <li data-menu="">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="fa fa-ticket"></i>Collection</a>
                        <ul class="dropdown-menu">
                            <li data-menu="">
                            <a class="dropdown-item" href="{{Route('support_tickets_un_solved')}}"
                                    data-toggle="dropdown">Create Income</a>
                            </li>

                            <li data-menu=""><a class="dropdown-item" href="{{Route('support_tickets')}}" data-toggle="dropdown">Income List</a>
                            </li>
                        </ul>
                    </li>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="{{Route('income_transaction')}}" data-toggle="dropdown">Transaction</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="fa fa-ticket"></i>Expenses</a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="{{Route('expenses_statements')}}"
                                    data-toggle="dropdown">Create Expenses</a>
                            </li>
                            <!--<li data-menu=""><a class="dropdown-item" href="{{Route('support_tickets_un_solved')}}"-->
                            <!--        data-toggle="dropdown">Create Expenses</a>-->
                            <!--</li>-->
                            <li data-menu=""><a class="dropdown-item" href="{{Route('vendor_payment')}}" data-toggle="dropdown">Vendor Payment</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="{{Route('advance_payment')}}" data-toggle="dropdown">Advance Payment</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="{{Route('expenses_list')}}" data-toggle="dropdown">Expenses List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="fa fa-ticket"></i>Balance sheet</a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="{{Route('addbalance')}}"
                                    data-toggle="dropdown">Create Balancesheet</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="fa fa-ticket"></i>Tax</a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="{{Route('addsales')}}"
                                    data-toggle="dropdown">Create Tax</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="{{Route('taxlist')}}"
                                    data-toggle="dropdown">Tax List</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                    data-toggle="dropdown"><i class="icon-briefcase"></i><span>Bank</span></a>
                <ul class="dropdown-menu">
                      <li data-menu="">
                        <a class="dropdown-item" href="{{Route('add_bank')}}"><i class="icon-list"></i>Add Bank</a>
                    </li>
                      <li data-menu="">
                        <a class="dropdown-item" href="{{Route('bank_list')}}"><i class="icon-list"></i>Bank List</a>
                    </li>

                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                    data-toggle="dropdown"><i class="icon-calculator"></i><span>Reprts</span></a>
                <ul class="dropdown-menu">
                    <li><a
                            class="dropdown-item" href="{{Route('sale_reports')}}" ><i
                                class="icon-book-open"></i>Sales Report</a>
                    </li>
                    <li><a class="dropdown-item" href="{{Route('Statement_purches')}}"
                                   data-toggle="dropdown"><i
                                class="icon-wallet"></i>Purchase</a>
                            </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="icon-wallet"></i>Account</a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="{{Route('income_roports')}}"
                                    data-toggle="dropdown">Income</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="{{Route('expense_report')}}"
                                    data-toggle="dropdown">Expenses</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="{{Route('add_transaction')}}"
                                    data-toggle="dropdown">Balancesheet</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="icon-wallet"></i>Bank</a>
                        <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="{{Route('deposit_reports')}}"
                                    data-toggle="dropdown">Deposit</a>
                            </li>
                    <li data-menu=""><a class="dropdown-item" href="{{Route('payment_reports')}}"
                                    data-toggle="dropdown">Payment</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="{{Route('bank_balance')}}"
                                    data-toggle="dropdown">Bank Balance</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            @if(Auth::User()->user_role ==1)
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                    data-toggle="dropdown"><i class="ft-file-text"></i><span>Employee</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="ft-users"></i>Employees</a>
                        <ul class="dropdown-menu">
                          <li data-menu=""><a class="dropdown-item" href="{{Route('add_employees_list')}}"
                                  data-toggle="dropdown">Add Employees</a>
                          </li>
                          <li data-menu=""><a class="dropdown-item" href="{{Route('role')}}"
                                  data-toggle="dropdown">Add Role</a>
                          </li>
                            <li data-menu=""><a class="dropdown-item" href="{{Route('employees_list')}}"
                                    data-toggle="dropdown">Employees List</a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="ft-users"></i>Department</a>
                        <ul class="dropdown-menu">
                          <li data-menu=""><a class="dropdown-item" href="{{Route('add_departments')}}"
                                  data-toggle="dropdown">Add Department</a>
                          </li>
                          <li data-menu=""><a class="dropdown-item" href="{{Route('departments')}}"
                                  data-toggle="dropdown">Department List</a>
                          </li>

                        </ul>
                    </li>

                </ul>
            </li>
            @endif
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                    data-toggle="dropdown"><i class="ft-file-text"></i><span>User</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                      <li data-menu=""><a class="dropdown-item" href="{{Route('userprofile')}}"
                              data-toggle="dropdown">User Profile</a>
                      </li>

                      <li data-menu=""><a class="dropdown-item" href="{{Route('ChangePasswordForm')}}"
                              data-toggle="dropdown">Change Password</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="{{Route('UserForm')}}"
                              data-toggle="dropdown">Create User</a>
                      </li>

                    </li>

                </ul>
            </li>
            <!-- <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                    data-toggle="dropdown"><i class="ft-file-text"></i><span>Department</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="ft-users"></i>Department</a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="{{Route('add_departments')}}"
                                    data-toggle="dropdown"> Add Department</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="{{Route('departments')}}"
                                    data-toggle="dropdown">Department List</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li> -->
             </ul>
        </div>
        <!-- /horizontal menu content-->
    </div>
