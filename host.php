<!DOCTYPE html>
<html>
  <head>
    <title>Host</title>
    <link rel="stylesheet" type="text/css" href="test3/test3/css/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Host Form</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="firstName">CommunityName</label>
                <input
                  type="text"
                  class="form-control"
                  id="CommunityName"
                  name="CommunityName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">About</label>
                <input
                  type="text"
                  class="form-control"
                  id="About"
                  name="About"
                />
              </div>
              <div class="form-group">
                <label for="gender">Category</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="Category"
                      value="Indoor"
                      id="Indoor"
                    />Indoor</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="Category"
                      value="Outdoor"
                      id="Outdoor"
                    />Outdoor</label
                  >
                  
                  
                </div>
              </div>
              <div class="form-group">
                <label for="email">email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="Phonenumber">PhoneNumber</label>
                <input
                  type="text"
                  class="form-control"
                  id="PhoneNumber"
                  name="PhoneNumber"
                />
              </div>
              <div class="form-group">
                <label for="number">Description</label>
                <input
                  type="text"
                  class="form-control"
                  id="Description"

                  name="Description"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small></small>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>