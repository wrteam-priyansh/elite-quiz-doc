<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
        <link href="images/favicon.png" rel="icon" />
        <title>Documentation | Elite Quiz</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"/>
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" />
    </head>

    <body data-spy="scroll" data-target=".idocs-navigation" data-offset="125">

        <!-- Preloader -->
        <div class="preloader">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloader End --> 

        <!-- Document Wrapper   
        =============================== -->
        <div id="main-wrapper"> 

            <!-- Header
            ============================ -->
            <header id="header" class="sticky-top"> 
                <!-- Navbar -->
                <nav class="primary-menu navbar navbar-expand-lg bg-dark navbar-dropdown-dark">
                    <div class="container-fluid">
                        <!-- Sidebar Toggler -->
                        <button id="sidebarCollapse" class="navbar-toggler d-block d-md-none" type="button"><span></span><span class="w-75"></span><span></span></button>
                        <!-- Logo --> 
                        <img src="images/logo.png" width="200" alt="logo"/>
                        <!-- Logo End -->
                    </div>
                </nav>
                <!-- Navbar End --> 
            </header>
            <!-- Header End --> 

            <!-- Content
            ============================ -->
            <div id="content" role="main">

                <!-- Sidebar Navigation
                ============================ -->
                <div class="idocs-navigation bg-dark docs-navigation-dark">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="#introduction" class="nav-link active">Introduction</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#admin_panel">Elite Quiz Admin Panel</a>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#installation">Configure on your server</a></li>
                                <li class="nav-item"><a class="nav-link" href="#notification-management">Notification Management</a></li>
                                <li class="nav-item"><a class="nav-link" href="#system-configurations">Set System Configurations</a></li>
                                <li class="nav-item"><a class="nav-link" href="#pp">Set Privacy Policy</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tc">Set Terms Conditions</a></li>
                                <li class="nav-item"><a class="nav-link" href="#about_us">Set About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#instructions">Set Instructions</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#quiz_app" class="nav-link">Elite Quiz App</a>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#howToSetupFlutter">How to setup flutter</a></li>
                                <li class="nav-item"><a class="nav-link" href="#upgradeFlutter">Upgrade flutter to 2.0</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToRunFlutterProject">How to run flutter project</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToRunFlutterInVSCode">How to run flutter in Vs code</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToChangePackageName">How to change package name</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToIntegrateFirebase">How to integrate firebase</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToEnableFirebaseAuth">How to enable firebase auth</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToEnableCloudFirestore">How to enable cloud firestore</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToChangeAppName">How to change application name</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToChangeAppVersion">How to change application version</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToChangeDatabaseUrl">How to change database url and other backend settings</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToChangeAdIds">How to change ad ids</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToSetDefaultLanguage">How to set default language</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToAddLanguage">How to add new language</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToChangeAppColors">How to change application colors</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToChangeAppFont">How to change application font</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToChangeIntroSlideImages">How to change intro slider images</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToChangeDefaultProfileImages">How to change default profile images</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToChangeJsonAnimations">How to change json animations</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToAppConstants">How to change application constants</a></li>
                                <li class="nav-item"><a class="nav-link" href="#howToGenerateReleaseApk">How to generate release apks</a></li>         
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#support" class="nav-link">Support</a></li>
                        <li class="nav-item"><a href="#rating" class="nav-link">Your Feedback</a></li>
                        <li class="nav-item"><a href="#contactus" class="nav-link">Contact Us</a></li>                      
                    </ul>
                </div>


                <!-- Docs Content  -->
                <div class="idocs-content">
                    <div class="container"> 

                        <!-- Getting Started -->
                        <section id="introduction">
                            <h3>Introduction</h3>
                            <p class="">Thank you for purchasing code. It really means a lot and It's our pleasure to serve top-notch service to you. Thank you so much for choosing<a href="https://wrteam.in/" style='color:#3c55d1' target="_blank"> WRTeam </a>. If you have trouble with the code and documentation please contact to our Support Team <a href="#support" style="color:#3c55d1">Here</a></p>
                        </section>
                        <hr class="divider">    

                        <section id="admin_panel">
                            <h3>Elite Quiz Admin Panel</h3>
                            
                            <section id="installation">
                                <h4>How to Install Elite Online on Your shared hosting?</h4>
                                <ol>
                                    <li>Create your domain or subdomain in your shared hosting</li>
                                    <li>Create an empty database in your shared hosting and remember this credentials:
                                        <br/><span>i. database name</span>
                                        <br/><span>ii. database username</span>
                                        <br/><span>iii. database password</span>                                
                                    </li>
                                    <li>Upload the source code you have downloaded from CodeCanyon and unzip it.</li>
                                    <li>Now navigate to the url where your project is located.<br/>
                                        ex. mydomain.com or subdomain.mydomain.com
                                    </li>
                                    <li>The installation screen should appear and guide you in the process.</li>
                                </ol>
                                <p>Thats it! Now you are ready to run your first Elite Online : <b>https://elitequiz.wrteam.in</b></p>
                                <b>Default Login Details</b><br>
                                User: admin<br>
                                Pass: admin123<br><br>
                                <hr> 
                            </section>

                            <section id="notification-management">
                                <h4>Notification Management</h4>
                                <p>First Of all,we need to set the FCM server key from <a href="https://console.firebase.google.com" target="_blank">Firebase console</a></p>
                                <img src="images/panel/notification-setting.png"/>
                                <hr>  
                            </section>

                            <section id="system-configurations">
                                <h4>Set System Configurations</h4>
                                <p>Set Configurations for you app. All the changes are maded here will directly reflect in the App</p>
                                <p>Change Quiz name , JWT KET and logo form Profie menu</p>
                                <img src="images/panel/profile.png" alt='System Configurations' title='System Configurations'>

                                <p>From here you can set System & App Timezone, App Play store or market place Link, Enable / Disable Answer Display, Language Mode, Option E Mode, Force Update App, Daily Quiz Mode, Contest Mode, Battle Random Category Mode, Battle Group Category Mode & In App Purchase. Manage App Version and Update Shareapp Text. Set fix Question in level</p>
                                <img src="images/panel/system-configurations.png" alt='System Configurations' title='System Configurations'>
                                <hr> 
                            </section>

                            <section  id="pp">
                                <h4>Set Privacy Policy</h4>
                                <p>Set Privacy Policy for your website and app.</p>
                                <img src="images/panel/pp.png"/>
                                <hr> 
                            </section>

                            <section  id="tc">
                                <h4>Set Terms Conditions</h4>
                                <p>Set Terms Conditions for your website and app.</p>
                                <img src="images/panel/tc.png"/>					
                                <hr>  
                            </section>

                            <section id="about_us">
                                <h4>About Us Content</h4>
                                <p>Set and manage your about us content for app.</p>
                                <img src="images/panel/about-us.png"/>					
                                <hr>
                            </section>

                            <section id="instructions">
                                <h4>How to Play Content</h4>
                                <p>Set and manage your how to play content for app.</p>
                                <img src="images/panel/instructions.png"/>					
                                <hr> 
                            </section>

                        </section>
                        <hr class="divider">  

                        <section id="quiz_app">
                            <h3>Elite Quiz App</h3>

                            <section id="howToSetupFlutter">
                                <h4 >How to setup Flutter</h4>
                                <ol>
                                    <li>Download Lastest Flutter SDK from below link.in that click on flutter_window_xxx.zip button.</li>
                                    <li><a href="https://flutter.dev/docs/get-started/install/windows">Flutter sdk Here</a>
                                        <img src="images/app/setup.jpg"/>	
                                    </li> 
                                    <li>Extract the zip file and copy flutter folder into your desired installation location for the
                                        Flutter SDK (eg. C:\src\flutter; do not install Flutter in a directory like C:\Program Files\).
                                    </li>                                  
                                    <li>Inside Flutter folder find flutter_console.bat. Start it by double-clicking.
                                        <img src="images/app/setup2.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Now set your enviournment variable</li>
                                    <li>From the Start search bar in , type ‘env’ and select Edit environment variables for your account
                                        <img src="images/app/path.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Under User variables check if there is an entry called Path:</li>
                                    <li>Click on Edit.new Dialog open from it click on new and copy full path to flutter\bin as its value
                                    </li>
                                    <li>Now Restart your pc for changes to take effect
                                        <img src="images/app/path2.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Now check everything is ok or not</li>
                                    <li>open cmd and do following shown in below picture
                                        <img src="images/app/check.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Now open Android Studio and create new flutter project then select your flutter sdk file to the
                                        location where we have downloaded earlier and that's it
                                        <img src="images/app/flutter.jpg" alt="Elite Quiz" />
                                    </li>
                                </ol>
                                <hr> 
                            </section>

                            <section id="upgradeFlutter">
                                <h4>Upgrade to flutter 2.0</h4>
                                <ol>
                                    <li>for upgrade go to terminal in android studio and type flutter upgrade it will automatically pick latest version with stable channel</li>
                                    <li>If you have updated flutter 2.x after upgrade run flutter doctor. and in flutter doctor if you see below error like licence status unknown.
                                        <img src="images/app/upgrade1.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>then go to sdk manager from upar right corner then go to android sdk inside that sdk tools and then uncheck hide obsolute package then check android sdk command line tool latest then apply and then ok. it will download latest version  as shown in below fig.
                                        <img src="images/app/upgrade2.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>now run flutter doctor again your error will be removed</li>
                                </ol>					
                                <hr> 
                            </section>

                            <section id="howToRunFlutterProject">
                                <h4>How to run flutter project</h4>
                                <img src="images/app/open2.jpg" alt="Elite Quiz" />
                                <ol>
                                    <li>Go to file > open > then choose your downloaded project location then your project will open.and if you see upper right part 'enable dart support' then click that and go to pubspec.yaml file and in uper right part click pub get or package get and then press run button.</li>
                                    <li><b>If your are getting error then you can perform below hack</b>
                                    <li>if in your system firewall is on, then you can temporary disable firewall and then try to run project</li>
                                    <li>if your flutter channel is not stable then you need to change it to stable. you can check your flutter channel by terminal. </li>
                                    <li>go to android studio in bottom line click on terminal, in terminal write flutter channel.as shown below.
                                        <img src="images/app/ch1.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>if your are not in stable then write flutter channel stable</li>
                                    <li>go to Tools > Flutter > Flutter Clen.</li>
                                    <li>go to file > invalidate cache/ restart</li>
                                </ol>					
                                <hr> 
                            </section>


                            <section  id="howToRunFlutterInVSCode">
                                <h4>How to run flutter in Vs code</h4>
                                <ol>
                                    <li>Visual Studio Code is a lightweight but powerful source code editor(optinal)(for vscode, all above setup for Android Studio are required).</li>
                                    <li>For Download VSCode <a href="https://code.visualstudio.com/Download" style='color:#2889B9' target="_blank">Click Here</a></li>
                                    <li>Open vs code and go to terminal option and open terminal
                                        <img src="images/app/vscode1.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Inside Terminal For Run the Application perform this two command 1. flutter pub get (flutter packages get) 2. flutter run </li>
                                </ol>
                                <hr> 
                            </section>


                            <section id="howToChangePackageName">
                                <h4>How to change package name</h4>
                                <ol>
                                    <li>In the Android panel, click on the little gear icon.Uncheck/Deselect the Compact Empty Middle Packages option.
                                        <img src="images/app/packagename_1.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Your package directory will now be broken up in individual directories.
                                        <img src="images/app/packagename_2.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Individually select each directory you want to rename, and: Right-click it Select Refactor Click on Rename current In the Pop-up dialog.
                                        <img src="images/app/packagename_3.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Enter the new name and hit Refactor.Allow a minute to let Android Studio update all changes.
                                        <img src="images/app/packagename_4.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Now press ctrl + shift + R and replace old packagename with your new packagename
                                        <img src="images/app/packagename_5.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>For ios open ios > Runner > info.plist > there is the key CFBundleIdentifier change the string value for that as shown in below
                                        <img src="images/app/packagename_6.jpg" alt="Elite Quiz" /><br/>
                                        <img src="images/app/packagename_7.jpg" alt="Elite Quiz" />
                                    </li>                                   
                                    <li>similar if you are using VSCode, for search press ctrl + F search old package name as given files in below image and replace with your package name. 
                                        <img src="images/app/package_name1.jpg" alt="Elite Quiz" />
                                    </li>
                                </ol>
                                <hr> 
                            </section>


                            <section  id="howToIntegrateFirebase">
                                <h4>How to integrate firebase</h4>
                                <ol>
                                    <li>Create firebase project in your account
                                        <img src="images/app/createFirebase1.jpg" alt="Elite Quiz" /><br>
                                        <img src="images/app/createFirebase2.jpg" alt="Elite Quiz" /><br>
                                        <img src="images/app/createFirebase3.jpg" alt="Elite Quiz" /><br>
                                        <img src="images/app/createFirebase4.jpg" alt="Elite Quiz" /><br>
                                    </li>
                                    <li>Add andorid application to your firebase project
                                        <img src="images/app/addAndroid.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Visit https://developers.google.com/android/guides/client-auth to know how to get sha-1 key
                                        <img src="images/app/addAndroid2.jpg" alt="Elite Quiz" /><br>
                                        <img src="images/app/addAndroid3.jpg" alt="Elite Quiz" /><br>
                                        <img src="images/app/addAndroid4.jpg" alt="Elite Quiz" /><br>
                                    </li>
                                    <li>You have connected andorid application to your firebase project successfully</li>
                                    <li>Add ios application to your firebase project 
                                        <img src="images/app/addIos.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Get your bundle id here [your-flutter-project-dir]\ios\Runner.xcodeproj\project.pbxproj or search for
                                        PRODUCT_BUNDLE_IDENTIFIER and you will get following result 
                                        <img src="images/app/addIos3.jpg" alt="Elite Quiz" /><br>
                                        <img src="images/app/addIos2.jpg" alt="Elite Quiz" /><br>
                                        <img src="images/app/addIos4.jpg" alt="Elite Quiz" /><br>
                                        <img src="images/app/addIos5.jpg" alt="Elite Quiz" /><br>
                                        <img src="images/app/addIos6.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>You have connected ios application to your firebase project successfully</li>
                                </ol>
                                <hr> 
                            </section>


                            <section  id="howToEnableFirebaseAuth">
                                <h4>How to enable firebase auth</h4>
                                <ol>
                                    <li>Go to firebase project.Click on authentication menu and goto sign-in method. Enable all the authentication method mention in below image
                                    </li>
                                    <li>If your are using google sign-in you need to enable OAuth APIs that you want to use using
                                        https://console.developers.google.com/ .Enable people api and make sure you've filled out all required fields in the console for OAuth consent screen.
                                        Otherwise, you may encounter APIException errors.
                                    </li>
                                    <li>If your are using facebook login go to https://developers.facebook.com/ and create project and get your application id and applicaiton secret from there.
                                        <img src="images/app/addFbAuth.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>Go to android/app/src/main/AndroidManifest.xml and add your app id as shown in image
                                        <img src="images/app/addFbAuth2.jpg" alt="Elite Quiz" />
                                    </li>
                                </ol>
                                <hr> 
                            </section>


                            <section id="howToEnableCloudFirestore">
                                <h4>How to enable cloud firestore</h4>
                                <ol>
                                    <li>Follow this steps in order to add cloud firestore    
                                        <img src="images/app/addFirestore.jpg" alt="Elite Quiz" /><br>
                                        <img src="images/app/addFirestore2.jpg" alt="Elite Quiz" /><br>
                                        <img src="images/app/addFirestore3.jpg" alt="Elite Quiz" />
                                    </li>

                                    <li>Change security rules of cloud firestore in order to make your app more secure
                                        <img src="images/app/addFirestore4.jpg" alt="Elite Quiz" />
                                    </li>                            
                                </ol>
                                <hr> 
                            </section>

                            <section  id="howToChangeAppName">
                                <h4>How to change application name</h4>
                                <ol>
                                    <li>Change application name for your android application. Go to android/app/src/main/AndroidManifest.xml and change name
                                        <img src="images/app/appName2.jpg" alt="Elite Quiz" />
                                    </li> 
                                    <li>Change application name for your ios application. Go to ios/Runner/Info.plist and change name
                                        <img src="images/app/appName3.jpg" alt="Elite Quiz" />
                                    </li>                                    
                                </ol>
                                <hr> 
                            </section>


                            <section id="howToChangeAppVersion">
                                <h4>How to change application version</h4>
                                <ol>
                                    <li>
                                        go to pubspec.yaml EX.Update version:A.B.C+X in pubspec.yaml.
                                    </li>   
                                    <li>Do not forget to execute flutter packages get, flutter build or flutter run after this step</li>   
                                </ol>
                                <img src="images/app/changeAppVersion.jpg" alt="Elite Quiz" />
                                <hr> 
                            </section>

                            <section id="howToChangeAppLogo">
                                <h4>How to change application logo</h4>
                                <ol>
                                    <li>For Android For Android, open android > app > src > main > res > mipmap add here your logo according to device screen size                
                                        <img src="images/app/logo_1.jpg" alt="Elite Quiz" />  
                                    </li> 
                                    <li>For IOS  open ios > Runner > Assets.xcassets > AppIcon.appiconset here you need to put your logo according to diffrent size.
                                        <img src="images/app/logo_2.jpg" alt="Elite Quiz" />
                                    </li> 
                                </ol>
                                <hr> 
                            </section>


                            <section id="howToChangeDatabaseUrl">
                                <h4>How to change database url and other backend settings</h4>
                                <ol>
                                    <li>
                                        Go to lib/utils/constants.dart and make changes shown in below image
                                        <img src="images/app/changeBaseUrlAndApiParameters.jpg" alt="Elite Quiz" />
                                    </li>   
                                </ol>
                                <hr> 
                            </section>


                            <section id="howToChangeAdIds">
                                <h4>How to change ad ids</h4>
                                <ol>    
                                    <li>
                                        Go to lib/utils/constants.dart and update ad ids as shown in below image
                                        <img src="images/app/changeAdIds.jpg" alt="Elite Quiz" />
                                    </li> 
                                </ol>
                                <hr> 
                            </section>


                            <section id="howToSetDefaultLanguage">
                                <h4>How to set default language</h4>
                                <ol>
                                    <li>
                                        By default,default applicaiton language is english. If you want to change default language
                                        go to lib/utils/constants.dart and add your respective language's code shown in below image
                                        <img src="images/app/changeDefaultLanguage.jpg" alt="Elite Quiz" />
                                    </li> 
                                    <li>
                                        If your default language code is not in supported language list add language code 
                                        in list as shown in below image. Go to lib/utils/constants.dart
                                        <img src="images/app/addDefaultLanguage.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>
                                        If your default language is not in assets/languages/[language-code].json then create new file
                                        in same folder with [language-code].json. Add all the labels from en.json and 
                                        convert label values in your respective language
                                        <img src="images/app/addNewLanguage.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>
                                        copy all the labels form en.json file in your [language-code].json file.
                                        <img src="images/app/addNewLanguage2.jpg" alt="Elite Quiz" />
                                    </li>
                                </ol>
                                <hr> 
                            </section>


                            <section  id="howToAddLanguage">
                                <h4>How to add new language</h4>
                                <ol>    
                                    <li>
                                        add newly added language code in list as shown in below image. Go to lib/utils/constants.dart
                                        <img src="images/app/addDefaultLanguage.jpg" alt="Elite Quiz" />
                                    </li> 
                                    <li>
                                        Create new file
                                        in assets/languages/ with [language-code].json. Add all the labels from en.json and 
                                        convert label values in your respective language
                                        <img src="images/app/addNewLanguage.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>
                                        copy all the labels form en.json file in your [language-code].json file.
                                        <img src="images/app/addNewLanguage2.jpg" alt="Elite Quiz" />
                                    </li>                                    
                                </ol>
                                <hr> 
                            </section>


                            <section id="howToChangeAppColors">
                                <h4>How to change application colors</h4>
                                <ol>    
                                    <li>
                                        Add your colors in lib/ui/styles/colors.dart and do not change the color variables name
                                        <img src="images/app/changeColors.jpg" alt="Elite Quiz" />
                                    </li>   
                                </ol>
                                <hr> 
                            </section>


                            <section id="howToChangeAppFont">
                                <h4>How to change application font</h4>
                                <ol>    
                                    <li>
                                        Go to lib/app/app.dart and add your font as shown in image
                                        <img src="images/app/changeFont.jpg" alt="Elite Quiz" />
                                    </li>
                                    <li>
                                        Go to assets/google_fonts/ and add .tff files of fonts.
                                        <img src="images/app/changeFont2.jpg" alt="Elite Quiz" />
                                    </li>  
                                </ol>
                                <hr> 
                            </section>


                            <section id="howToChangeIntroSlideImages">
                                <h4>How to change intro slider images</h4>
                                <ol>    
                                    <li>
                                        Go to assets > images folder and add your intro slide images.It is recommended to follow same naming convention shown in below image
                                        <img src="images/app/introSlider.jpg" alt="Elite Quiz" />
                                    </li> 
                                    <li>
                                        Go to assets > files > introSliderImages.json file and add intro slider image's name in this this file as shown in below image
                                        <img src="images/app/introSlider2.jpg" alt="Elite Quiz" />
                                    </li>  
                                </ol>
                                <hr> 
                            </section>


                            <section  id="howToChangeDefaultProfileImages">
                                <h4>How to change default profile images</h4>
                                <ol>    
                                    <li>
                                        Go to assets > images > profile folder and add your default profile images.It is recommended to follow same naming convention shown in below image
                                        <img src="images/app/profilePictures.jpg" alt="Elite Quiz" />
                                    </li>  
                                    <li>
                                        Go to assets > files > defaultProfileImages.json file and add default profile image's name in this this file as shown in below image
                                        <img src="images/app/profilePictures2.jpg" alt="Elite Quiz" />
                                    </li>   
                                </ol>
                                <hr> 
                            </section>


                            <section id="howToChangeJsonAnimations">
                                <h4>How to change json animations</h4>
                                <ol>    
                                    <li>
                                        Go to assets > animations folder and add json animaiton files. Make sure to use same name shown in below image
                                        <img src="images/app/changeJsonAnimations.jpg" alt="Elite Quiz" />
                                    </li>   
                                </ol>
                                <hr> 
                            </section>


                            <section id="howToAppConstants">
                                <h4>How to change application constants</h4>
                                <ol>    
                                    <li>
                                        If you want to change question duration or other constants as shown in image
                                        Go to lib/utils/constants.dart and update values
                                        <img src="images/app/changeOtherConstants.jpg" alt="Elite Quiz" />
                                        <img src="images/app/changeOtherConstants2.jpg" alt="Elite Quiz" />
                                    </li> 
                                    <li>If you want to modify coins distribution equation go to lib/utils/uiUtils.dart and updated equaiton as show in below image
                                        <img src="images/app/coinsEquation.jpg" alt="Elite Quiz" />
                                    </li>
                                </ol>
                                <hr> 
                            </section>


                            <section  id="howToGenerateReleaseApk">
                                <h4>How to generate release apks</h4>
                                <ol>    
                                    <li>To generate release android apk and publish to playstore follow https://flutter.dev/docs/deployment/android</li>            
                                    <li>To generate release ios apk and publish to appstore follow https://flutter.dev/docs/deployment/ios</li>
                                </ol>
                                <hr> 
                            </section>

                        </section>
                        <hr class="divider">  

                        <section id="support">
                            <h3>Support</h3>
                            <p>Its our pleasure to serve our service and support. please contact our support team.</p>
                            <p>Head of Customer Support : Janki Bhatti <a href="https://join.skype.com/invite/VGeSe7WKtty0" target="_blank" style="color:#3c55d1">Skype Name : Janki Bhatti</a></p>
                            <p>To help our customers, we constantly be in touch with every customer if they need any assistance regarding our product. 
                                We offer our customers a support from  <strong> Mon – Fri 9.00am to 6.00pm IST (GMT +5.30) – We are a Team located in India – Asia.</strong></p>
                            <p>Typically we reply our customers for all the questions and queries within 24 hours of time via comments, support forum or emails.</p>
                        </section>
                        <hr class="divider">  

                        <section id="rating">
                            <h3>Your Feedback</h3>
                            <p>Dear valuable customer,
                                Thank you very much for choosing our product.
                                It's our pleasure to serve top-notch service to you.
                                Please give us your honest feedback that will help us to make a more strong and reliable product by click here <a href="https://codecanyon.net/item/elite-quiz-the-flutter-quiz-app/33570423" style="color:#3c55d1" target="_blank">Rate Us</a>.
                                Thank you very much.</p>
                        </section>
                        <hr class="divider">  

                        <section id="contactus">
                            <h3>Contact Us</h3>
                            <p>WRTeam has creative and dedicated group of developers who are mastered in Apps Developments and Web Application Development with a niche in delivering quality solutions to customers across the globe.
                                Contact us today to find out how we can help you or for freelance work.
                            </p><p>Visit Us : <a href="https://wrteam.in/" target="_blank">https://wrteam.in</a>
                            </p><p>Mail Us : info@wrteam.in</p>
                            <p>Thank you very much.</p>
                        </section>
                        <hr class="divider">  

                    </div>
                </div>

            </div>
            <!-- Content end --> 


        </div>
        <!-- Document Wrapper end --> 

        <!-- Back To Top --> 
        <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

        <!-- JavaScript
        ============================ -->
        <script src="assets/vendor/jquery/jquery.min.js"></script> 
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
        <!-- Easing --> 
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script> 
        <!-- Custom Script -->
        <script src="assets/js/theme.js"></script>
    </body>
</html>
