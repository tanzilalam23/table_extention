
plugin.tx_kidsregio_kids {
    view {
        # cat=plugin.tx_kidsregio_kids/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:kidsregio/Resources/Private/Templates/
        # cat=plugin.tx_kidsregio_kids/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:kidsregio/Resources/Private/Partials/
        # cat=plugin.tx_kidsregio_kids/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:kidsregio/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_kidsregio_kids//a; type=string; label=Default storage PID
        storagePid =
    }
}
