
		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
            <div class="sidebar-header">
              <a href="/dashboard" class="sidebar-brand">
                Barq<span>Express</span>
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
                <li class="nav-item nav-category d-none">السائقين وخطوط السير</li>
                <li class="nav-item d-none">
                  <a class="nav-link" data-bs-toggle="collapse" href="#driver" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title"> السائقين</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="driver">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="pages/email/inbox.html" class="nav-link">إضافة سائق</a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/email/read.html" class="nav-link">بحث فى السائقين</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item d-none">
                  <a class="nav-link" data-bs-toggle="collapse" href="#road" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="git-merge"></i>
                    <span class="link-title"> خطوط السير</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="road">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="pages/email/inbox.html" class="nav-link">إضافة خط سير</a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/email/read.html" class="nav-link">بحث فى خطوط السير</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item nav-category">السيارات</li>
                <li class="nav-item" data-url="car">
                  <a class="nav-link" data-bs-toggle="collapse" href="#cars" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="aperture"></i>
                    <span class="link-title"> السيارات</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="cars">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="/new-car" class="nav-link">إضافة سيارة</a>
                      </li>
                      <li class="nav-item">
                        <a href="/cars" class="nav-link">بحث فى السيارات</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item d-none">
                  <a class="nav-link" data-bs-toggle="collapse" href="#move" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title">حركة السيارات</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="move">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="pages/email/inbox.html" class="nav-link">إضافة حركة جديدة</a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/email/read.html" class="nav-link">بحث فى التحركات</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item d-none">
                  <a class="nav-link" data-bs-toggle="collapse" href="#zeet" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="cloud-snow"></i>
                    <span class="link-title">زيت السيارات</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="zeet">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="pages/email/inbox.html" class="nav-link">تغيير زيت سيارة</a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/email/read.html" class="nav-link">بحث فى تغيير الزيت</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item d-none">
                  <a class="nav-link" data-bs-toggle="collapse" href="#gaz" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="cloud-rain"></i>
                    <span class="link-title">وقود السيارات</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="gaz">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="pages/email/inbox.html" class="nav-link">تموين وقود سيارة</a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/email/read.html" class="nav-link">بحث فى تموين الوقود</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item d-none">
                  <a class="nav-link" data-bs-toggle="collapse" href="#maintaince" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="cloud-lightning"></i>
                    <span class="link-title">صيانة السيارات</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="maintaince">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="pages/email/inbox.html" class="nav-link">إضافة صيانة</a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/email/read.html" class="nav-link">بحث فى الصيانات</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item nav-category">المستخدمين</li>
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