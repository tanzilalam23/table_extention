
plugin.tx_emp_emp {
    view {
        # cat=plugin.tx_emp_emp/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:emp/Resources/Private/Templates/
        # cat=plugin.tx_emp_emp/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:emp/Resources/Private/Partials/
        # cat=plugin.tx_emp_emp/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:emp/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_emp_emp//a; type=string; label=Default storage PID
        storagePid =
    }
}
