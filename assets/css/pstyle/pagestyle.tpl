{block name="pagestyle"}
     <!-- common -->
    {include file="$PSTYLEPATH/common.tpl"}
    
    <!-- dashboard -->
    {include file="$PSTYLEPATH/dashboard.tpl"}
    
    <!-- basedata-->
    <!-- locality -->
    {include file="$PSTYLEPATH/basedata/locality/country.tpl"}
    {include file="$PSTYLEPATH/basedata/locality/city.tpl"}
    
     <!-- school parameter -->
    {include file="$PSTYLEPATH/basedata/schoolparam/group.tpl"}
    {include file="$PSTYLEPATH/basedata/schoolparam/level.tpl"}
    {include file="$PSTYLEPATH/basedata/schoolparam/grade.tpl"}
    {include file="$PSTYLEPATH/basedata/schoolparam/mention.tpl"}
    {include file="$PSTYLEPATH/basedata/schoolparam/speciality.tpl"}
    {include file="$PSTYLEPATH/basedata/schoolparam/classunit.tpl"}
    {include file="$PSTYLEPATH/basedata/schoolparam/classroom.tpl"}
    {include file="$PSTYLEPATH/basedata/schoolparam/school.tpl"}
    
     <!-- parameter -->
    {include file="$PSTYLEPATH/basedata/parameter/feetype.tpl"}
    {include file="$PSTYLEPATH/basedata/parameter/fee.tpl"}
    
     <!-- inscription parameter -->
     <!-- candidat parameter -->
    {include file="$PSTYLEPATH/inscription/candidat/candidatlist.tpl"}
    {include file="$PSTYLEPATH/inscription/candidat/addcandidat.tpl"}
    
     <!-- registration parameter -->
    {include file="$PSTYLEPATH/inscription/registration/registrationlist.tpl"}
    {include file="$PSTYLEPATH/inscription/registration/addregistration.tpl"}
    
    <!-- administration -->
    {include file="$PSTYLEPATH/administration/academicyear.tpl"}
    {include file="$PSTYLEPATH/administration/account/permission.tpl"}
    {include file="$PSTYLEPATH/administration/account/role/rolelist.tpl"}
    {include file="$PSTYLEPATH/administration/account/role/addrole.tpl"}
    {include file="$PSTYLEPATH/administration/account/users/userlist.tpl"}
    {include file="$PSTYLEPATH/administration/account/users/adduser.tpl"}
    
    <!-- teaching -->
    {include file="$PSTYLEPATH/teaching/semester.tpl"}
    {include file="$PSTYLEPATH/teaching/lessonunittype.tpl"}
    {include file="$PSTYLEPATH/teaching/lessonunitmention.tpl"}
    {include file="$PSTYLEPATH/teaching/lessonunit.tpl"}
    
    <!-- recovery -->
    {include file="$PSTYLEPATH/recovery/studyfees.tpl"}
  
{/block}