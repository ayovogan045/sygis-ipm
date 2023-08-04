{block name="pagescript"}
    <!-- common -->
    {include file="$PSCRIPTPATH/common.tpl"}
    
    <!-- dashboard -->
    {include file="$PSCRIPTPATH/dashboard.tpl"}
    
    <!-- database -->
    <!-- locality -->
    {include file="$PSCRIPTPATH/basedata/locality/country.tpl"}
    {include file="$PSCRIPTPATH/basedata/locality/city.tpl"}
    
    <!-- parameter -->
    {include file="$PSCRIPTPATH/basedata/parameter/feetype.tpl"}
    {include file="$PSCRIPTPATH/basedata/parameter/fee.tpl"}
    
    <!-- school parameter -->
    {include file="$PSCRIPTPATH/basedata/schoolparam/group.tpl"}
    {include file="$PSCRIPTPATH/basedata/schoolparam/level.tpl"}
    {include file="$PSCRIPTPATH/basedata/schoolparam/grade.tpl"}
    {include file="$PSCRIPTPATH/basedata/schoolparam/mention.tpl"}
    {include file="$PSCRIPTPATH/basedata/schoolparam/speciality.tpl"}
    {include file="$PSCRIPTPATH/basedata/schoolparam/classunit.tpl"}
    {include file="$PSCRIPTPATH/basedata/schoolparam/classroom.tpl"}
    {include file="$PSCRIPTPATH/basedata/schoolparam/school.tpl"}
    
    <!-- inscription parameter -->
     <!-- candidat parameter -->
    {include file="$PSCRIPTPATH/inscription/candidat/candidatlist.tpl"}
    {include file="$PSCRIPTPATH/inscription/candidat/addcandidat.tpl"}
     <!-- registration parameter -->
    {include file="$PSCRIPTPATH/inscription/registration/registrationlist.tpl"}
    {include file="$PSCRIPTPATH/inscription/registration/addregistration.tpl"}
    
    <!-- administration -->
    {include file="$PSCRIPTPATH/administration/academicyear.tpl"}
    {include file="$PSCRIPTPATH/administration/account/permission.tpl"}
    {include file="$PSCRIPTPATH/administration/account/role/addrole.tpl"}
    {include file="$PSCRIPTPATH/administration/account/role/rolelist.tpl"}
    {include file="$PSCRIPTPATH/administration/account/users/adduser.tpl"}
    {include file="$PSCRIPTPATH/administration/account/users/userlist.tpl"}
    
    <!-- teaching -->
    {include file="$PSCRIPTPATH/teaching/semester.tpl"}
    {include file="$PSCRIPTPATH/teaching/lessonunittype.tpl"}
    {include file="$PSCRIPTPATH/teaching/lessonunitmention.tpl"}
    {include file="$PSCRIPTPATH/teaching/lessonunit.tpl"}
    
    <!-- recovery -->
    {include file="$PSCRIPTPATH/recovery/studyfees.tpl"}
   
{/block}