# Wishlist

A webpage that allows a user to create and share his own whishlist for presents.
People with a key can complete this list with items that the creator will not see to keep the surprise.
Possibility to book a present

in bold are steps currently being worked on
-- Temp : 
next step : 
encode password 
Create account

## Step 0 : 
- [X] Do a proper readme
- [X] Restart form scratch (06-01-2018 ->  new ideas and new dev environnement)

## Authentification
- [X] Make auth system (log in on same page as list of lists)
- [X] Manage that with session
- [ ] **Allow user creation (check for unique username)**
- [ ] **Encrypt password in db**
- [X] Generate session for logged in user
- [X] redirect user that's login out to index.php

## Nav
- [ ] **Authentificated user first page is list of wishlists with a form to create a new one**
- [ ] Do list creation form
- [ ] Delete list with confirmation
- [ ] Header to go back to list of lists and profile and logout (?)
- [ ] Maybe a dropdown menu with all list
- [X] Logout system that can be called anywhere and redirect to homepage after disconnecting the user


## List 
- [ ] Adding an object to a list
- [ ] Deleting an object from a list (list creator only)
- [ ] Everybody (or firend ?) can add object to a list. they'll appear in a hidden part
-- Find a good way to make people add and delete object. keep this in "friend circle". 
[ ] An item can be "booked" and can be "bought" if booked, nobody else can book it and if bought it'll go to an "archive" part of the list


## SQL 
- [ ] do model of DB (empty, with one example and with a lot of example)