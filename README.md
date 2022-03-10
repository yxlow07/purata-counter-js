# Version Changelog in Purata Counter
<hr>

**Version 1.0**
- Basic functionality: Counter for the main 8 subjects
- Two separate objects for storing pemberat and marks
- Display of purata is not optimised

**Version 1.1**
- Added cocurriculum

**Version 2.0**
- Added function to give an estimate of how much the remaining subjects must get in order to reach target given by user
- Optimised objects by merging marks and pemberat together
- Round off purata to three decimal places
- Colored the purata, red is failed and green is passed

**Version 2.0.1**
- Added color for target, green = doable / yellow = very hard but sure / red = impossible / blue = target too low already passed
- Optimised the string too long / repetitive => Print one time will do _(Credit: How Yi)_
- Optimised print colored to follow DRY concept
- Added blank lines to help readability

**Version 2.0.2**
- Changed from int to float in the case of marks having decimal places such as cocurriculum _(Credit: Zedex)_
- Update suggestions: 
  - Enable students who had received all their marks to set target _(Credit: Zhi Xue)_

**Version 2.0.3**
- Fixed bug where 0 marks does not count