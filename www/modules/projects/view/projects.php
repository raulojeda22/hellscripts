<section class="probootstrap-section">
<div id="projectPageContent">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-12 section-heading probootstrap-animate">
                    <h2 class="mb20">DO YOU HAVE AN AMAZING PROJECT IN MIND?</h2>
                    <button id="createProject" type="button" class="btn btn-primary">Create project</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12 section-heading probootstrap-animate">
                    <h2 class="mb20">RESET APP</h2>
                    <button id="deleteAllProjects" type="button" class="btn btn-primary">Remove all projects</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading probootstrap-animate">
                <h2  class="mb20">Projects</h2>
            </div>
        </div>
        <div>
            <h3>Datatables</h3>
        </div>
        <div class="table-responsive" id="allTableProjectsDiv" >
            <table class="table table-condensed table-dark" id="allTableProjects">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Website</th>
                        <th>License</th>
                        <th>Privacy</th>
                        <th>Languages</th>
                        <th>Get</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="allTableProjectsBody">
                    
                </tbody>
            </table>
        </div>
        <div>
            <h3>JqWidgets</h3>
        </div>
        <div class="table-responsive" id="allJqWidgetsProjectsDiv" >
            
        </div>
        <div>
        </div>
    </div>
    <script src="<? echo _PROJECT_URL_ ?>/modules/projects/view/js/project.js?jsVersion=<? echo _JS_VERSION_ ?>"></script>
    <!-- END section -->
</div>
</section>
<section id="project_modal">
    <div id="details_project" hidden>
        <div id="details">
            <div id="container">
                <div class="row">
                    <div class="col-md-2">Id: </div>
                    <div id="idProjectModal" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Name: </div>
                    <div id="nameProjectModal" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Description: </div>
                    <div id="descriptionProjectModal" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Website: </div>
                    <div id="websiteProjectModal" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">License: </div>
                    <div id="licenseProjectModal" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Privacy: </div>
                    <div id="privacyProjectModal" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Languages: </div>
                    <div id="languagesProjectModal" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">Start Date: </div>
                    <div id="startDateProjectModal" class="col-md-10"></div></br>
                </div>
                <div class="row">
                    <div class="col-md-2">End Date: </div>
                    <div id="endDateProjectModal" class="col-md-10"></div></br>
                </div>
            </div>
        </div>
    </div>
</section>

