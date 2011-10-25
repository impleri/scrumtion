Scrumption
============

A PHP-based application for Scrum/Agile project management.

The Scrum project will provide a consistent interface to project management across a variety of platforms. The central feature is the PHP/MySQL web service (Scrumption) that provides a central web-based project management system. The Skrum KDE application will connect to a Scrumption server and provide a desktop frontend in addition to being able to run independently. There is also an Android-based mobile app under development and plans to port the desktop and mobile applications to Mac OSX, iOS, and BlackBerry platforms.

Planned Features
----------------
 + Poker planning both locally and remotely
 + GitHub and Gitorious integration
 + Defined roles and role-specific actions
 + Tagging


Database Design
---------------
**comments**

 + id (key)
 + meta_key [*stories*, *projects*, *sprints*, *tasks*]
 + meta_value ({meta_key}.id) 


**organisations**

 + id (key)
 + name
 + description


**organisations_members**

 + organisation_id [*organisations.id*]
 + user_id [*users.id*]
 + position
 + {unique key organisation_id, user_id}


**projects**

 + id (key)
 + name
 + description
 + visibility
 + point_scale
 + velocity_method
 + max_points
 + organisation [*organisations.id*]


**projects_members**

 + project_id [*projects.id*]
 + user_id [*users.id*]
 + position
 + {unique key project_id, user_id}


**sprints**

 + id (key)
 + name
 + description
 + project [*projects.id*]


**stories**

 + id (key)
 + name
 + description
 + creator [*users.id*]
 + project [*projects.id*]


**tags**

 + id (key)
 + name
 + description


**tags_meta**

 + tag_id [*tags.id*]
 + meta_key [*stories*, *tasks*]
 + meta_value ({meta_key}.id)


**tasks**

 + id (key)
 + name
 + description
 + priority
 + points
 + project [*projects.id*]
 + story [*stories.id*]
 + sprint [*sprints.id*]
 + creator [*users.id*]
 + owner [*users.id*]
 + start
 + review
 + complete


**users**

 + id (key)
 + login
 + password
 + email
 + name
 + description
 + image
 + access_key
 + {unique key login}, {unique key email}
 
