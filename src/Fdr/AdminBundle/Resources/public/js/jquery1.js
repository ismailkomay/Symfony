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
jQuery(function(){
    //fdr--------------------
     //-----------------------------------------------------------
    $('#fdr_adminbundle_feuillederoute_dateGeneree_date').datetimepicker({
        format: "Y-m-d",
        timepicker: false,
        datepicker: true,
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
        datepicker: true,
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
        datepicker: true,
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
        datepicker: true,
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
        datepicker: true,
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
        datepicker: true,
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
        datepicker: true,
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
        datepicker: true,
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
        datepicker: true,
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
        datepicker: true,
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
        datepicker: true,
    });
});
