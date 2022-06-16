#
# Add SQL definition of database tables
#
# KU color family for images with overlay
CREATE TABLE tt_content (
    ku_color_family varchar(100) DEFAULT '' NOT NULL,
);

# KU button 1 for images with overlay
CREATE TABLE tt_content (
    ku_overlay_button_1 varchar(40) DEFAULT '' NOT NULL,
);

# KU button 2 for images with overlay
CREATE TABLE tt_content (
    ku_overlay_button_2 varchar(40) DEFAULT '' NOT NULL,
);

# KU Link for button 1 for images with overlay
CREATE TABLE tt_content (
    ku_overlay_link_1 varchar(255) DEFAULT '' NOT NULL,
);

# KU Link for button 2 for images with overlay
CREATE TABLE tt_content (
    ku_overlay_link_2 varchar(255) DEFAULT '' NOT NULL,
);