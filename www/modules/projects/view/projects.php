<section class="probootstrap-section">
<div id="projectPageContent">
    <div class="container">
        <div>
            <div class="col-md-12 section-heading probootstrap-animate">
                <h2 class="mb20">DO YOU HAVE AN AMAZING PROJECT IN MIND?</h2>
                <button id="createProject" type="button" class="btn btn-primary">Create project</button>
            </div>
        </div>
        <div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading probootstrap-animate">
                <h2  class="mb20">Projects</h2>
            </div>
        </div>
        <div class="row" id="allProjects"></div>
    </div>
    <script src="<? echo _PROJECT_URL_ ?>/modules/projects/view/js/project.js?jsVersion=<? echo _JS_VERSION_ ?>"></script>
    <!-- END section -->
</div>
</section>
<section id="project_modal">
    <div id="details_project" hidden>
        <div id="details">
            <div id="container">
                Id: <div id="idProjectModal"></div></br>
                Name: <div id="nameProjectModal"></div></br>
                Description: <div id="descriptionProjectModal"></div></br>
                Website: <div id="websiteProjectModal"></div></br>
                License: <div id="licenseProjectModal"></div></br>
                Privacy: <div id="privacyProjectModal"></div></br>
                Languages: <div id="languagesProjectModal"></div></br>
                Start Date: <div id="startDateProjectModal"></div></br>
                End Date: <div id="endDateProjectModal"></div></br>
            </div>
        </div>
    </div>
</section>