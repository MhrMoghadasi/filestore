<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">مدیریت فروشگاه فایل</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">مدیریت کاربران <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.users.list')}}">لیست کاربران</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('admin.users.add')}}">ثبت کاربر جدید</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">مدیریت محصولات <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.product.list')}}">نمایش محصولات</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('admin.product.add')}}">افزودن محصول جدید</a></li>
                        <li><a href="{{route('admin.product.update')}}">بروزرسانی محصولات</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="...">
                </div>
                <button type="submit" class="btn btn-default">جستجو</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
