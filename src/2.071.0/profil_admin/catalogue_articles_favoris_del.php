<?php
// *************************************************************************************************************
// SUPPRIMER ARTICLES FAVORIS
// *************************************************************************************************************


require ("_dir.inc.php");
require ("_profil.inc.php");
require ($DIR."_session.inc.php");

global $bdd;

if (empty($_REQUEST['ref_article']))
{
    ?> <script type="text/javascript">
            window.parent.alerte.alerte_erreur ('Erreur', "La r�f�rence n'est pas sp�cifi�e",'<input type="submit" id="bouton0" name="bouton0" value="Ok" />');
    </script>
<?php
}

else
{
        if (article::_del_article_fav($_REQUEST['ref_article']) == false)
            {
                 ?> <script type="text/javascript">
            window.parent.alerte.alerte_erreur ('Erreur', "Erreur lors de la suppression",'<input type="submit" id="bouton0" name="bouton0" value="Ok" />');
    </script>
<?php
            }
        else
            {
                ?> <script type="text/javascript">
            window.parent.alerte.alerte_erreur ('Suppression effectu�', "L'article a �t� supprim� avec succ�s.",'<input type="submit" id="bouton0" name="bouton0" value="Ok" />');
            window.parent.location.reload();
                </script>
<?php
            }
}

// *************************************************************************************************************
// AFFICHAGE
// *************************************************************************************************************

?>