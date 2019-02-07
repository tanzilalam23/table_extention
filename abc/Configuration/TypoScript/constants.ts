
plugin.tx_abc_xen {
    view {
        # cat=plugin.tx_abc_xen/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:abc/Resources/Private/Templates/
        # cat=plugin.tx_abc_xen/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:abc/Resources/Private/Partials/
        # cat=plugin.tx_abc_xen/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:abc/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_abc_xen//a; type=string; label=Default storage PID
        storagePid =
    }
}
