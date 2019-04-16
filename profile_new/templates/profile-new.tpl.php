<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>User Profile</title>

    <!-- Required Stylesheets -->
    <link
      type="text/css"
      rel="stylesheet"
      href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"
    />

    <!-- Required scripts -->
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>
    <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.0/vue-resource.js"></script>
  </head>
  <body>
    <!-- Our application root element -->
   
<div class="container emp-profile" id="app">
           
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img v-bind:src="info.user_im" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        
                                        {{ info.field_first_name }}  {{ info.field_last_name }}
                                        
                                    </h5>
                                    <h6>
                                       &nbsp;{{ info.field_residential_location }}
                                        
                                    </h6>
                                    <p class="proile-rating">&nbsp;</p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a target="_blank" href="https://www.peoplepedia.org/">Peoplepedia</a><br/>
                            <a target="_blank" href="https://www.eberhard.com/cart">Eberhard</a><br/>
                            <a target="_blank" href="https://www.projectparadigm.org/">Projectparadigm</a>
                            <p>SKILLS</p>
                            
                            <a href="">Web Developer</a><br/>
                            <a href="">Drupal</a><br/>
                            <a href="">Angular</a><br/>
                            <a href="">PHP, Codegnitor</a><br/>
                            <a href="">Vue.js</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Birthday</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ info.field_birthday }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ info.field_first_name }}  {{ info.field_last_name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>gagsy17@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Education:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><span v-html="info.field_education"></span></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <br>
                                                <label>Bio</label>
                                            </div>
                                            <div class="col-md-10">
                                                <p><span v-html="user.bio"></span></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <br>
                                                <label>My Early Life/Career</label>
                                            </div>
                                            <div class="col-md-10">
                                                <p><span v-html="user.story"></span></p>
                                            </div>
                                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    
        </div>

<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
    <!-- Start running your app -->
    <script>
     var link = 'http://work.splitreef.com/client/development/peoplepedia-live/get_pro_new/gagsy777';
	new Vue({
  el: '#app',
  data () {
    return {
      info: {'foo':'bar'},
      user: {'foo':'bar'},
      story: {'foo':'bar'},
      user_im: 'http://work.splitreef.com/client/development/peoplepedia-live/sites/all/themes/peoplepedia/images/placeholder-person.png',
      
    }
  },
  filters: {
    currencydecimal (value) {
      return value.toFixed(2)
    }
  },
  mounted () {
    axios
      .get('https://work.splitreef.com/client/development/peoplepedia-live/get_pro_new/gagsy777')
      .then(response => {
        this.info = response.data.user_profile;
        this.user.bio =response.data.user_profile.fields.profile_this_is_my_story.body;
        this.user.story =response.data.user_profile.fields.profile_this_is_my_story.body;
      })
      .catch(error => {
        console.log(error)
        this.errored = true
      })
      .finally(() => this.loading = false)
  }
})
    </script>
  </body>
</html>
