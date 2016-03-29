<div id="link-list-pluslet-id" data-link-list-pluslet-id="<?php echo $this->_pluslet_id; ?>"></div>



<script>
$(document).ready(function() {

    console.log('edit view');

    var pluslet_id = $('#link-list-pluslet-id').attr('data-link-list-pluslet-id');
    console.log('pluslet_id: ' + pluslet_id);

    $.ajax({
        url: "helpers/fetch_pluslet_data.php",
        type: "GET",
        dataType: "json",
        data: { pluslet_id: pluslet_id },
        success: function (data) {
            //console.log(data.body);
            var body = data.body;
            var ul = $('ul.link-list');
            console.log(body);

            var newlinkList = "";

            $(body).find('li').each(function() {


                var label = $(this).attr('data-link-list-label');
                var record_id = $(this).attr('data-link-list-item-id');
                var display_options = $(this).attr('data-link-list-display-options');

                var icons = display_options.substring(0,1);
                var icons_active = (icons == '1') ? "active" : "";
                var icons_minus = (icons == '1') ? "display: none;" : "display: inline-block;";
                var icons_check = (icons == '1') ? "display: inline-block;" : "display: none;";


                var desc = display_options.substring(1,2);
                var desc_active = (desc == '1') ? "active" : "";
                var desc_minus = (desc == '1') ? "display: none;" : "display: inline-block;";
                var desc_check = (desc == '1') ? "display: inline-block;" : "display: none;";


                var note = display_options.substring(2,3);
                var note_active = (note == '1') ? "active" : "";
                var note_minus = (note == '1') ? "display: none;" : "display: inline-block;";
                var note_check = (note == '1') ? "display: inline-block;" : "display: none;";


                newlinkList += "<li class='db-list-item-draggable' value='" + record_id + "'><span class='db-list-label'>" + label + "</span>";
                newlinkList += "<div>";
                newlinkList += '<span class="show-icons-toggle db-list-toggle ' + icons_active + '">';
                newlinkList += '<i class="fa fa-minus" style="' + icons_minus + '"></i>';
                newlinkList += '    <i class="fa fa-check"  style="' + icons_check + '"></i> Icons </span>';
                newlinkList += '   <span class="show-description-toggle db-list-toggle ' + desc_active + '">';
                newlinkList += '    <i class="fa fa-minus" style="' + desc_minus + '"></i>';
                newlinkList += '    <i class="fa fa-check" style="' + desc_check + '"></i> Description </span>';
                newlinkList += '    <span class="include-note-toggle db-list-toggle ' + note_active + '">';
                newlinkList += '    <i class="fa fa-minus" style="' + note_minus + '"></i>';
                newlinkList += '    <i class="fa fa-check" style="' + note_check + '"></i> Note </span>';
                newlinkList += '</div>';
                newlinkList += "</li>";
                console.log(newlinkList);
            });


            $('.db-list-results.ui-sortable').show().append(newlinkList.trim());

        }
    });

});

</script>

<?php if ((isset($this->_pluslet_id)) && (!empty($this->_pluslet_id))) {
    $pluslet_id = $this->_pluslet_id;
} else {
    $data_linklist_tmp_pluslet_id = "";

} ?>


<div class="pure-g">
    <div class="pure-u-1-3">

        <h3><?php print _("Record Search Box"); ?></h3>

        <!--display db results list-->
        <div class="dblist-display">

            <div class="databases-results-display">
                <input class="databases-search" type="text"
                       placeholder="<?php print _("Enter database title..."); ?>"/>
                <label for="limit-az"> <input id="limit-az" type="checkbox" checked/>
                    Limit to AZ List
                </label>
                <ul class="databases-searchresults"></ul>
            </div>
        </div>


    </div>
    <div class="pure-u-1-3">
        <h3>Selected Records</h3>

        <span class="db-list-input-label">Show all: </span> <input type="checkbox" name="show_all_icons_input"
                                                                   id="show_all_icons_input" class="pure-checkbox"/>
        <span class="db-list-input-label"> Icons </span>
        <input type="checkbox" name="show_all_desc_input" id="show_all_desc_input" class="pure-checkbox"/> <span
            class="db-list-input-label">Descriptions</span>
        <input type="checkbox" name="show_all_notes_input" id="show_all_notes_input" class="pure-checkbox"/> <span
            class="db-list-input-label">Notes</span>

        <!--display results selected-->
        <div class="db-list-content">
            <div id="LinkList-body">
                <ul class="db-list-results ui-sortable" data-link-list-pluslet-id="">


                </ul>
            </div>
        </div>


        <!--buttons-->
        <div class="db-list-buttons">
            <button data-link-list-pluslet-id=""
                    class="pure-button pure-button-primary dblist-button"><?php print _("Create List Box"); ?></button>
            <button
                class="pure-button pure-button-primary dblist-reset-button"><?php print _("Reset List Box"); ?></button>
        </div>

    </div>
    <div class="pure-u-1-3">
        <h3>Add New Record</h3>

        <form id="create-record-form" class="pure-form pure-form-stacked">
            <fieldset>

                <label for="record-title"><?php echo _('Record Title'); ?>
                    <input id="record-title" type="text" value="" required/>
                </label>


                <label for="alternate-title"><?php echo _('Alternate Title'); ?>
                    <input id="alternate-title" value="" type="text"/>
                </label>
                <label for="location"><?php echo _('Location (Enter URL)'); ?>
                    <input id="location" type="text" value="" required/>
                </label>

                <label for="checkurl">
            <span id="checkurl" class="checkurl_img_wrapper"><i alt="Check URL" title="Check URL" border="0"
                                                                class="fa fa-globe fa-2x clickable"></i></span>
                </label>

                <label for="description"><?php echo _('Description'); ?>
                    <textarea id="description" value=""></textarea>
                </label>

                <button id="add-record" class="pure-button pure-button-primary"
                        type="submit"><?php echo _('Create Record'); ?></button>
            </fieldset>
            <div class="notify"></div>
        </form>

        <script>
            $('#create-record-form').on('submit', function (event) {
                submitRecordForm(event);
            });

            $('#checkurl').on('click', function () {
                checkUrl();
            });

            function submitRecordForm(event) {
                // Override the form submit action. Doing this lets you use the html5 form validation
                // techniques/controls
                if (!document.getElementById('create-record-form').checkValidity()) {
                    event.preventDefault();
                } else {
                    event.preventDefault();

                    // Insert the record object
                    createRecord.insertRecord({
                        "title_id": null,
                        "title": $('#record-title').val(),
                        "alternate_title": null,
                        "description": $('#description').val(),
                        "pre": null,
                        "last_modified_by": "",
                        "last_modified": "",
                        "subjects": [{'subject_id': $('#guide-parent-wrap').data().subjectId}],
                        "locations": [$('#location').val()]
                    });

                    // Reset the form
                    document.getElementById('create-record-form').reset();
                    // Reset the CKEditor description content
                    CKEDITOR.instances.description.setData("");
                }
            }

            function checkUrl() {
                var location = $('#location').val();

                $.post("<?php echo getControlURL(); ?>/records/record_bits.php", {
                    type: "check_url",
                    checkurl: location
                }, function (data) {
                    $('#checkurl').html(data);
                });
            }

            CKEDITOR.replace('description', {
                toolbar: 'Basic'
            });
        </script>

    </div>
</div>

<script>
    var rL = resourceList();
    rL.init();
    rL.bindUiActions();
</script>