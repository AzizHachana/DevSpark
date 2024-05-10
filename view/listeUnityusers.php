<?php
include $_SERVER["DOCUMENT_ROOT"] . '/vacation/controller/unityuserU.php';
$c=new unityuserU();
$tab=$c->listeUnityusers();
?>

<center><h1>liste unityusers</h1>
<a href="/vacation/Admin/pages/samples/register.php">ajouter unityuser</a>
</center><table border="1" align="center" width="70%">
<tr>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>email</th>
    <th>mdp</th>
    <th>tel</th>
    <th>tache</th>
    <th>update</th>
    <th>delete</th>
</tr>
<tr>
    <?php foreach($tab as $unityuser)
    {
        ?>
        <td><?php echo $unityuser['id'];?> </td> 
        <td><?php echo $unityuser['nom'];?> </td> 
        <td><?php echo $unityuser['prenom'];?> </td> 
        <td><?php echo $unityuser['email'];?> </td> 
        <td><?php echo $unityuser['mdp'];?> </td> 
        <td><?php echo $unityuser['tel'];?> </td>
        <td><?php echo $unityuser['tache'];?> </td>
        
        <td align="center">
                <form method="POST" action="/vacation/Admin/pages/samples/updateUsers.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $unityuser['id']; ?> name="id">
                </form>
            </td>

        <td>
            <a href="#" onclick="return confirmDelete(<?php echo $unityuser['id']; ?>);">delete</a>
        </tr>
    </tr>
    
    <?php
    }
    ?>
    
</table>

<script>
function confirmDelete(id) {
    var result = confirm("Êtes-vous sûr de vouloir supprimer ce compte ?");
    if (result) {
        window.location.href = "/vacation/view/DeleteUnityuser.php?id=" + id;
    }
    return false;
}
</script>

</html>
