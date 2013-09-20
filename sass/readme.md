# CSS structure and style guide

## Structure
Loosely follows a mix of Brad Frost's (http://bradfrostweb.com/blog/post/atomic-web-design/)['Atomic] (http://coding.smashingmagazine.com/2013/08/02/other-interface-atomic-design-sass/)[Design'] and Jonathan Snook's (http://smacss.com/)['SMACSS']. 

The structure of SASS files follows Atomic Design with the smallest elements being _quarks_ (paragraphs, lists, headings, etc), moving up to _atoms_ (buttons, the media object, grids, etc), moving up to _molecules_ (things made of _quarks_ and _atoms_, ie: navigation, hgroup, carousels).

Some _quark_ or _atom_ elements may need specific SMCASS-style modules modifiers applied to them. Eg. an inline-list, intro paragraphs, log-in form, etc. These should be defined as molecules in a partial file. For example, you may have a `_lists.scss` in both the _atoms_ folder and the _molecules_ folder.

Molecules are built into _organisms_ that function as large pieces of pages. Eg. header, sidebar, 

Molecules are built into _templates_, built out of _organisms_. Note that pages are specific instances of templates. 