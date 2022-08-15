<!DOCTYPE html>
<html>
  <head>
    <title>BOOTCAMP SURVEY</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
  
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>BOOTCAMP SURVEY</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
				</div>
              <div class="form-group">
                <label for="educatıon">Educational status</label>
                <div>
                  <label for="highschool" class="radio-inline"
                    ><input
                      type="radio"
                      name="educatıon"
                      value="h"
                      id="highschool"
                    />High school</label>
                  <label for="university" class="radio-inline"
                    ><input
                      type="radio"
                      name="educatıon"
                      value="u"
                      id="university"
                    />University</label
                  >
                  <label for="Degree" class="radio-inline"><input
                      type="radio"
                      name="educatıon"
                      value="d"
                      id="degree"
                    />Degree</label>
                    
                </div>
		      <div class="form-group">
                  <label for="universityName">University Name (if you have a bachelor's degree or are continuing your education)</label>
                     <input
                      type="text"
                      class="form-control"
                      id="universityName"
                      name="universityName"
                />
                </div>
		      <div class="form-group">
                <label for="department">If you have an undergraduate education or are continuing your education, the department you are studying</label>
                <div>
                  <label for="computerengineering" class="radio-inline"
                    ><input
                      type="radio"
                      name="department"
                      value="c"
                      id="computerengineering"
                    />Computer engineering</label
                  >
                  <label for="ındustrialengineering" class="radio-inline"
                    ><input
                      type="radio"
                      name="department"
                      value="b"
                      id="ındustrialengineering"
                    />Industrial Engineering</label
                  >
				  <label for="mechanicalengineering" class="radio-inline"
                    ><input
                      type="radio"
                      name="department"
                      value="m"
                      id="mechanicalengineering"
                    />Mechanical Engineering</label
                  >
				  <label for="managementinformationsystems" class="radio-inline"
                    ><input
                      type="radio"
                      name="department"
                      value="f"
                      id="managementinformationsystems"
                    />Management Information Systems</label
                  >
              </div>
			  <div class="form-group">
                <label for="graduate">If you are currently studying, what year and month will you graduate?</label>
                <input
                  type="graduate"
                  class="form-control"
                  id="graduate"
                  name="graduate"
                />
			  </div>
			  <div class="form-group">
                <label for="city">What city do you live in?</label>
                <input
                  type="text"
                  class="form-control"
                  id="city"
                  name="city"
                />
              </div>
			  <div class="form-group">
                <label for="work">In which city are you open to work?</label>
                <input
                  type="text"
                  class="form-control"
                  id="work"
                  name="work"
                />
              </div>
			  <div class="form-group">
                <label for="job">Your current job situation</label>
                <div>
                  <label for="notworking" class="radio-inline"
                    ><input
                      type="radio"
                      name="job"
                      value="n"
                      id="notworking"
                    />I am a graduate and not working</label
                  >
                  <label for="student" class="radio-inline"
                    ><input
                      type="radio"
                      name="job"
                      value="s"
                      id="student"
                    />I'm a university student and I don't work</label
                  >
				  <label for="fulltime" class="radio-inline"
                    ><input
                      type="radio"
                      name="job"
                      value="f"
                      id="fulltime"
                    />I work full time</label
                  >
				  <label for="internship" class="radio-inline"
                    ><input
                      type="radio"
                      name="job"
                      value="i"
                      id="internship"
                    />I'm doing an internship / part time / freelance</label
                  >
              </div>
			  <div class="form-group">
                <label for="levelEnglısh">Your level of English</label>
                <div>
                  <label for="beginner" class="radio-inline"
                    ><input
                      type="radio"
                      name="levelEnglısh"
                      value="b"
                      id="beginner"
                    />Beginner</label
                  >
                  <label for="ıntermediate" class="radio-inline"
                    ><input
                      type="radio"
                      name="levelEnglısh"
                      value="n"
                      id="ıntermediate"
                    />Intermediate</label
                  >
                  <label for="advanced" class="radio-inline"
                    ><input
                      type="radio"
                      name="levelEnglısh"
                      value="a"
                      id="advanced"
                    />Advanced</label
                  >
                </div>
				<div class="form-group">
                <label for="field">In which fields do you want to work?</label>
                <input
                  type="text"
                  class="form-control"
                  id="field"
                  name="field"
                />
              </div>
			  <div class="form-group">
                <label for="goal">Why are you in this situation? What are your goals for this training?</label>
                <input
                  type="text"
                  class="form-control"
                  id="goal"
                  name="goal"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Derya ....</small>
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
  </div>
</div>
  </body>
</html>
