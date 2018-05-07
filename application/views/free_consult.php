<style>
    .fields{margin-top: 15px;}
</style>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

        <?php echo form_open('authentication/Verify', "class='form-signin' id='frm' name='frm' role='form'"); ?>
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">


                <section>
                    <div class="fields">
                        <strong>First Name</strong>
                        <input name="txt_fisrt" class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40 required" type="text" placeholder="Enter your First Name" />
                    </div>
                </section>

                <section>
                    <div class="fields">
                        <strong>Company</strong>
                        <input name="txt_company" class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40" type="text" placeholder="Enter your Company" />
                    </div>
                </section>

                <section>
                    <div class="fields">
                        <strong>Address</strong>
                        <input name="txt_addr1" class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40" type="text" placeholder="Enter your Address" />
                    </div>
                </section>

                <div class="row">
                    <div class="col col-xs-5 col-sm-5 col-md-5 col-lg-5">
                        <div class="fields">
                            <strong>ZIP</strong>
                            <input type="text" datafld='ignore' name="zip" id="zip" class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40 required"/>
                            <input type="hidden" name="id_zip" id="id_zip" class="form-control"/>
                        </div>
                    </div>

                    <div class="col col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>

                    <div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="fields">
                            <div id='div_address' style="margin-top: 25px;"></div>
                        </div>
                    </div>
                </div>

                <section>
                    <div class="fields">
                        <strong>Home or Work Phone</strong>
                        <input name="txt_phone" class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40 required" type="text" placeholder="Enter your Phone" />
                    </div>
                </section>

                <section>
                    <div class="fields">
                        <strong>Please mark all those which apply</strong>

                        <label class="checkbox">
                            <input name="checkbox-1" id="checkbox-1" value="Filemaker Consultation/Development"  type="checkbox">
                            Filemaker Consultation/Development
                        </label>
                        <label class="checkbox">
                            <input name="checkbox-2" id="checkbox-2" value="(Non-FileMaker) Web Development"  type="checkbox">
                            (Non-FileMaker) Web Development
                        </label>
                        <label class="checkbox">
                            <input name="checkbox-3" id="checkbox-3" value="Web Consultation/Development"  type="checkbox">
                            Web Consultation/Development
                        </label>
                        <label class="checkbox">
                            <input name="checkbox-4" id="checkbox-4" value="FileMaker Integration"  type="checkbox">
                            FileMaker Integration
                        </label>
                        <label class="checkbox">
                            <input name="checkbox-5" id="checkbox-5" value="Mobile Consultation/Development"  type="checkbox">
                            Mobile Consultation/Development
                        </label>
                        <label class="checkbox">
                            <input name="checkbox-6" id="checkbox-6" value="FileMaker Training"  type="checkbox">
                            FileMaker Training
                        </label>
                        <label class="checkbox">
                            <input name="checkbox-7" id="checkbox-7" value="Upgrade to FileMaker 16"  type="checkbox">
                            Upgrade to FileMaker 16
                        </label>
                        <label class="checkbox">
                            <input name="checkbox-8" id="checkbox-8" value="Payment Processing Integration"  type="checkbox">
                            Payment Processing Integration
                        </label>
                        <label class="checkbox last">
                            <input name="checkbox-9" id="checkbox-9" value="Convert to/from FileMaker"  type="checkbox">
                            Convert to/from FileMaker
                        </label>

                    </div>
                </section>

                <section>
                    <div class="fields form-group">
                        <strong>How did you find us?</strong>
                        <select class="my_select2 required_select" id="sel_find" name="sel_find" style="width: 100%">
                            <option value="-1"></option>
                            <option value="Google Search">Google Search</option>
                            <option value="Google advertising">Google advertising</option>
                            <option value="Yahoo Search">Yahoo Search</option>
                            <option value="Other Search Engine">Other Search Engine</option>
                            <option value="FileMaker.com website">FileMaker.com website</option>
                            <option value="Another software developer website">Another software developer website</option>
                            <option value="Blog">Blog</option>
                            <option value="Online Article">Online Article</option>
                            <option value="Magazine/Newspaper Article">Magazine/Newspaper Article</option>
                            <option value="Referred by someone">Referred by someone</option>
                            <option value="Direct mail promotion">Direct mail promotion</option>
                            <option value="Saw you at a convention">Saw you at a convention</option>
                        </select>
                    </div>
                </section>


            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">

                <section>
                    <div class="fields">
                        <strong>Last Name</strong>
                        <input name="text_last" class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40 required" type="text" placeholder="Enter your Last Name" />
                    </div>
                </section>

                <section>
                    <div class="fields">
                        <strong>Your Email</strong>
                        <input name="txt_email" class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40 required" type="text" placeholder="Enter your Email" />
                    </div>
                </section>

                <section>
                    <div class="fields">
                        <strong>Address2</strong>
                        <input name="txt_addr2" class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40" type="text" placeholder="Enter your Address 2" />
                    </div>
                </section>

                <section>
                    <div class="fields">
                        <strong>Additional Phone</strong>
                        <input name="txt_phone2" class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40" type="text" placeholder="Enter other phone" />
                    </div>
                </section>

                <section>
                    <div class="fields form-group">
                        <strong>Budget</strong>
                        <select class="my_select2 required_select" id="sel_budget" name="sel_budget" style="width: 100%">
                            <option value="-1"></option>
                            <option value="< $1K">&lt; $1K</option>
                            <option value="$1K - $5K">$1K - $5K</option>
                            <option value="$5K - $10K">$5K - $10K</option>
                            <option value="$10K - $15K">$10K - $15K</option>
                            <option value="$15K - $25K">$15K - $25K</option>
                            <option value="$25K - $40K">$25K - $40K</option>
                            <option value="$40K - $60K">$40K - $60K</option>
                            <option value="$60K - $75K">$60K - $75K</option>
                            <option value="$75K - $100K">$75K - $100K</option>
                            <option value="$100K - $150K">$100K - $150K</option>
                            <option value="> $150K">&gt; $150K</option>
                        </select>
                    </div>
                </section>

                <section>
                    <div class="fields">
                        <strong>Message</strong>
                        <textarea class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40" cols="10" rows="3" name="txt_msg" style="height: 90px;"></textarea>
                    </div>
                </section>

                <section>
                    <div class="fields">
                        <strong>If found on google, which keywords did you use?</strong>
                        <input name="txt_keyword" class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40" type="text" placeholder="Enter the keywords" />
                    </div>
                </section>

                <section>
                    <div class="fields">
                        <strong>If referred, by who?</strong>
                        <input name="txt_referred" class="form-control g-placeholder-gray-light-v1 g-font-size-default g-color-gray-dark-v3 g-placeholder-inherit g-brd-gray-light-v4 g-brd-gray-light-v4--focus rounded-0 g-pa-12 g-pr-40" type="text" placeholder="Enter the referred" />
                    </div>
                </section>

            </div>
        </div>

        <?php echo form_close(); ?>
    </div>
<script>

    $(document).ready(function()
    {
        $(".my_select2").select2({
            placeholder: {
                id: '-1',
                text: 'Select an option.'
            }
        });

        jQuery('#zip').on('keyup click blur', function (e)
        {
            GetStateByZIP();
        });

        function GetStateByZIP()
        {
            var zip=jQuery('#zip').val();

            if(zip.length>2)
            {
                jQuery.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: 'Main/GetStateByZIP',
                    data:{zip:zip}
                }).done(function(data)
                {
                    jQuery('#div_address').empty();
                    if(data.msg=='OK')
                    {
                        jQuery('#id_zip').val(data.id_zip);
                        var address='<p style="line-height:10px;padding-top:5px;"><b>City:</b> '+data.city+'</p>';
                        var address=address+'<p style="line-height:10px;"><b>State:</b> '+data.state+'</p>';
                        var address=address+'<p style="line-height:10px;"><b>Country:</b> '+data.country+'</p>';

                        jQuery('#div_address').html(address);
                        //jQuery('#btn_save_profile').attr('disabled',false);
                    }
                    else
                    {
                        jQuery('#div_address').html('<p style="line-height:10px;padding-top:5px;color:red;">Wrong Zip Code</p>');
                        //jQuery('#btn_save_profile').attr('disabled',true);
                    }

                }).fail(function(jqHTR, textStatus, thrown)
                {
                    alert('Something is wrong with AJAX:' + textStatus);
                });
            }
        }
    });

</script>
