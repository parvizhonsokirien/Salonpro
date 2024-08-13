<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg  ')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i>
                    <p>
                        Салон
                    </p>
                    <i class="fas fa-angle-left right"></i>


                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('salon.index') }}" class="nav-link">
                                <i class="fas fa-user check"></i>
                                <p>Список салонов</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('salon.create') }}" class="nav-link">
                                <i class="fas fa-user-plus"></i>
                                <p>Добавить салон</p>
                            </a>
                        </li>
                    </ul>
            </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-mug-hot"></i>
                    <p>
                        Барбер
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('employee.index') }}" class="nav-link">
                            <i class="fas fa-registered"></i>
                            <p>Список барберов</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('employee.create') }}" class="nav-link">
                            <i class="fas fa-notes-medical"></i>
                            <p>Добавить барбера</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-portrait"></i>
                    <p>
                        Сервис
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('service.index')}}" class="nav-link">
                            <i class="fas fa-address-card"></i>
                            <p>Список сервисов</p>
                            </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('service.create') }}" class="nav-link">
                            <i class="fas fa-user-tie"></i>
                            <p>Добавить сервис</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-mug-hot"></i>
                    <p>
                        Клиенты
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('client.index') }}" class="nav-link">
                            <i class="fas fa-registered"></i>
                            <p>Список клиентов</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('client.create') }}" class="nav-link">
                            <i class="fas fa-notes-medical"></i>
                            <p>Добавить клиента</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>



        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-mug-hot"></i>
                    <p>
                        Категория Сервиса
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('sercat.index') }}" class="nav-link">
                            <i class="fas fa-registered"></i>
                            <p>Список категория сервисов</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sercat.create') }}" class="nav-link">
                            <i class="fas fa-notes-medical"></i>
                            <p>Добавить категорию сервиса</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>



        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fab fa-bootstrap"></i>
                    <p>
                        Бронировать место
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('booking.index') }}" class="nav-link">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Список мест</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('booking.create') }}" class="nav-link">
                            <i class="fas fa-chair"></i>
                            <p>Бронировать место</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>


    </nav>
        <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
