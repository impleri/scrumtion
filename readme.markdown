Scrumptious
============

A PHP-based application for Scrum/Agile project management.

The Skrum project will provide a consistent interface to project management across a variety of platforms. The central feature is the PHP/MySQL web service (Scrumptious) that provides a central web-based project management system. The Skrum KDE application will connect to a Scrumptious server and provide a desktop frontend in addition to being able to run independently. There is also an Android-based mobile app under development and plans to port the desktop and mobile applications to Mac OSX, iOS, and BlackBerry platforms.

Planned Features
----------------
 * Poker planning both locally and remotely
 * GitHub and Gitorious integration
 * Defined roles and role-specific actions
 * Tagging


Database Design
---------------
= comments
*id
object_type (stories, projects, sprints, tasks)
object_id

= organisations
*id
name
description

= organisations_members
organisation_id /->organisations
user_id /->users
position
{unique key organisation_id, user_id}

= projects
*id
name
description
visibility
point_scale
velocity_method
max_points
organisation /->organisations

= projects_members
project_id /->projects
user_id /->users
position
{unique key project_id, user_id}

= sprints
*id
name
description
project /->projects

= stories
*id
name
description
creator /->users
project /->projects

= tags
*id
name
description

= tags_meta
id
meta_key (stories/->stories, tasks/->tasks)
meta_value ({meta_key}.id)

= tasks
*id
name
description
priority
points
project /->projects
story /->stories
sprint /-> sprints
creator /->users
owner /->users
start
review
complete

= users
*id
login
password
email
name
description
image
access_key
{unique key login}, {unique key email}
