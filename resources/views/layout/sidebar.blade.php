
		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
            <div class="sidebar-header">
              <a href="/dashboard" class="sidebar-brand">
                Edu<span>Vision</span>
              </a>
              <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="sidebar-body">
              <ul class="nav">
                <li class="nav-item nav-category">الرئيسية</li>
                <li class="nav-item" data-url="dashboard">
                  <a href="/dashboard" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">لوحة التحكم</span>
                  </a>
                </li>
                <li class="nav-item nav-category">المدرسين والطلاب</li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#teacher" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">إدارة المدرسين</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="teacher">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="pages/email/inbox.html" class="nav-link">مدرس جديد</a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/email/read.html" class="nav-link">بحث فى المدرسين</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#stu" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">إدارة الطلاب</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="stu">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="pages/email/inbox.html" class="nav-link">طالب جديد</a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/email/read.html" class="nav-link">بحث فى الطلاب</a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item nav-category">الفيديوهات والإمتحانات</li>
                <li class="nav-item" data-url="car">
                  <a class="nav-link" data-bs-toggle="collapse" href="#videos" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="video"></i>
                    <span class="link-title">إدارة الفيديوهات</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="videos">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="/new-car" class="nav-link">إضافة فيديو</a>
                      </li>
                      <li class="nav-item">
                        <a href="/cars" class="nav-link">بحث فى الفيديوهات</a>
                      </li>
                      <li class="nav-item">
                        <a href="/cars" class="nav-link">مشتريات الفيديوهات</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item" data-url="exams">
                  <a class="nav-link" data-bs-toggle="collapse" href="#exams" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">إدارة الإمتحانات</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="exams">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="/new-car" class="nav-link">إضافة إمتحان</a>
                      </li>
                      <li class="nav-item">
                        <a href="/cars" class="nav-link">بحث فى الإمتحانات</a>
                      </li>
                      <li class="nav-item">
                        <a href="/cars" class="nav-link">نتائج الإمتحانات</a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item nav-category">المستخدمين والصلاحيات</li>
                <li class="nav-item" data-url="user">
                  <a class="nav-link" data-bs-toggle="collapse" href="#users" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">المستخدمين</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="users">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="/new-user" class="nav-link">إضافة مستخدم</a>
                      </li>
                      <li class="nav-item">
                        <a href="/users" class="nav-link">بحث فى المستخدمين</a>
                      </li>
                      <li class="nav-item d-none">
                        <a href="pages/email/read.html" class="nav-link">صلاحيات الموظفين</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item" data-url="permission">
                  <a class="nav-link" data-bs-toggle="collapse" href="#permission" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="eye"></i>
                    <span class="link-title">صلاحيات المستخدمين</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="permission">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="/new-user" class="nav-link">صلاحية جديدة</a>
                      </li>
                      <li class="nav-item">
                        <a href="/users" class="nav-link">بحث فى الصلاحيات</a>
                      </li>
                      <li class="nav-item d-none">
                        <a href="pages/email/read.html" class="nav-link">صلاحيات الموظفين</a>
                      </li>
                    </ul>
                  </div>
                </li>
                
                
                <li class="nav-item nav-category">الإعدادات</li>
                <li class="nav-item" data-url="change-password">
                  <a href="/change-password" class="nav-link">
                    <i class="link-icon" data-feather="key"></i>
                    <span class="link-title">تغيير كلمة السر</span>
                  </a>
                </li>
                <li class="nav-item" data-url="logout">
                  <a href="/logout" class="nav-link">
                    <i class="link-icon" data-feather="lock"></i>
                    <span class="link-title">تسجيل الخروج</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>