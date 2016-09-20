UPGRADING POTENTIAL ISSUE
=========================

-- Upgrading from 3.3.x or below

Victheme Property and Victheme Agents plugin has template changes which is related to its type, fields and attributes
weight. If your single property or agents profile page fields and attributes got jumbled, you may need to reorder
fields and attributes from property / agents configuration form.

There is database updates needed for this version, you can visit victheme core and do the upgrade there.


-- Upgrading from 1.x or 2.x branch

Before attempting to upgrade from 1.x or 2.x version of dreamhome please make backups first and test it first in
a development server before applying the upgrade in a live production server.

The 3.x version has updated to the 4.9.x version of visual composer which is NOT COMPATIBLE with old dreamhome
version which means all pages that were created by old visual composer will need to be reconfigured again.

The new dreamhome version also updated to 1.3.x branch of Victheme Property plugin which has new options for
widgets, shortcodes and templates and it is NOT COMPATIBLE with old 1.1 or 1.2 branch. Please update the
widget configuration, shortcodes entry and template entry or it will break the site.