jQuery(function(){
   //alert("Hello jQuery à marche via Bundle.");

  //jQuery("select#fdr_adminbundle_feuillederoute_secteur").hover
  /*jQuery("select#fdr_adminbundle_feuillederoute_typePrestation").change
  (
  	function(){
    $("select#fdr_adminbundle_feuillederoute_secteur").replaceWith(
    	"<select id='fdr_adminbundle_feuillederoute_secteur'><option value='55'>secteur de "+$("select#fdr_adminbundle_feuillederoute_typePrestation").val()+"</option></select>" );
     //alert($("select#fdr_adminbundle_feuillederoute_secteur option:selected").val());
  });*/
});
  jQuery(":text").addClass("input-sm");
  jQuery(":text").addClass("img-round");
  jQuery("legend").addClass("label-info");
  jQuery("legend,.page-header").css("text-align","center");
  jQuery(".page-header").css({"color":"#699FCD","font-style":"italic","text-shadow":"rgba(205, 205, 250, .7) .15em .15em .15em"});
  jQuery(".btn-sup").prepend("<font class='classrequired' color='red' title='champs obligaoire'><b>*</b></font>&nbsp;&nbsp;");
  jQuery(".desactiver-champs *").attr('disabled','disabled');
  jQuery(".desactiver-champs .classrequired").remove();
  jQuery("table").addClass("records_list table-bordered table-striped table-condensed");
  jQuery("tr th").css('background-color','#D3EBFE');
  jQuery(".btn-supp").prepend("<img src='../images/supprimer.png'/>");
  //$("tr:odd").addClass('oddtabl');
  //----jQuery("label").addClass("span1");
  
//----Dialog UI
jQuery(function() {
            $( "#usermanuel" ).dialog({
               autoOpen: false, 
               icon: "ui-icon-pencil",
               buttons: {
                                        Fermer: function() { $( this ).dialog( "close" ) }
                                        } 
            });
            $( "#opener" ).click(function() {
               $( "#usermanuel" ).dialog( "open" );
            });
            
            $( "#supprimerBonConfrm" ).dialog({
               autoOpen: false, 
               icon: "ui-icon-pencil",
               buttons: {
                                        Annuler: function() { $( this ).dialog( "close" ) },
                                        Annule: function() { $( this ).dialog( "close" ) }
                                        } 
            });
            $( "#supprimerBon" ).click(function() {
               $( "#supprimerBonConfrm" ).dialog( "open" );
            });
            
         });
//-----------  
    
jQuery("select option").each(function() {
    
    if ((this.text.substr(0,2))=="*/")    
    {$(this).text(this.text.substr(2)).addClass("colorerOption");}
});
jQuery("select").change(
  	function(){
   if($("option:selected").hasClass("colorerOption"))
    $("select#fdr_adminbundle_missionaffretement_client option:selected").append("<div class='span1' class='colorerOption' id='infoencompte'> | en compte</div>");
   else $("#infoencompte").remove();
    
  	});
    
jQuery(function(){
    if($("#fdr_adminbundle_missionaffretement_client option:selected").hasClass("colorerOption"))
    $("#fdr_adminbundle_missionaffretement_client option:selected").append("<div class='span1' class='colorerOption' id='infoencompte'> | en compte</div>");
   else $("#infoencompte").remove();
   //alert($("tr:has(td) td[id*='idclient']").length);
  //  alert($("tr:has(td) td[id*='idclient']").get(0).textContent);
    //alert($("tr:has(td) td[id*='idclient']").get(1).textContent);
    
    $("tr:has(td) td[id*='idclient']").each(function(){
        var idd= "#"+$(this).attr('id');
        var res = $(idd).text().substr(0,2);
        var tr=$(this);
            // alert(tr); 
        if(res=="*/") 
        {
        $(idd).text($(idd).text().substr(2));
        $(idd).parent().css({'font-weight':'bolder','background-color': '#FFF4F4'});
       ///---------- $(tr).css({'font-weight':'bolder','color':'green'});
        }
        //alert(res);
        //if($(idd).text.substr(0,2))=="*/")
        //$(idd).text('ss');
    });
    
    for(var i=0;i<$("tr:has(td) td[id*='idclient']").length;i++)
    {
      // alert($("tr:has(td) td[id*='idclient']").attr('id').get(i)) ;
       //var elt = $("tr:has(td) td[id*='idclient']").get(i).textContent;
       //var res = elt.substr(2,5);
       //alert(res);
       //$("tr:has(td) td[id*='idclient']").text(res).get(i); */          
    //   $("tr:has(td) td[id*='idclient']").get(i).text(res).addClass("colorerOption");
    }

    
   //if($("#fdr_adminbundle_feuillederoute_secteur").text().length>0)$("#fdr_adminbundle_feuillederoute_secteur").text("");
   //alert('contient texto: '+$("#secteurAffretement").text())
   //----------------$("#fdr_adminbundle_feuillederoute_secteur").append("<option value='1'>Machin</option><option value='2'>Machin2</option>");
});
//----------
jQuery(function(){
    //fdr--------------------
     //-----------------------------------------------------------
    $('#fdr_adminbundle_feuillederoute_dateGeneree_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_feuillederoute_dateGeneree_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //----------------------------------------------------
    $('#fdr_adminbundle_feuillederoute_dateDebutMission_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_feuillederoute_dateDebutMission_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //--------------------------------------------------------------------
    $('#fdr_adminbundle_feuillederoute_dateFinMission_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_feuillederoute_dateFinMission_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
     //boncarburant--------------------------------------
       $('#fdr_adminbundle_boncarburanthuile_date_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_boncarburanthuile_date_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //indisponibilite--------------------------------------------
       $('#fdr_adminbundle_indisponibilite_datedebut_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_indisponibilite_datedebut_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
	//--------------------------------
	   $('#fdr_adminbundle_indisponibilite_datefin_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_indisponibilite_datefin_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //Miss affret-----------------
        $('#fdr_adminbundle_missionaffretement_datelivraison_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_missionaffretement_datelivraison_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
	//--------------------------------
	   $('#fdr_adminbundle_missionaffretement_dateramassage_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_missionaffretement_dateramassage_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //Modif.--------------------------------------
    $('#fdr_adminbundle_modification_dateMaj_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_modification_dateMaj_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    //Peage--------------------------------------------
    $('#fdr_adminbundle_peage_datePassage_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
    $('#fdr_adminbundle_peage_datePassage_time').datetimepicker({
        format: "H:i",
        timepicker: true,
        datepicker: false,
        step:5
    });
    
    //Chauffeur -----------------------
    $('#fdr_adminbundle_chauffeur_dateembauche').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true
    });
});
