# PDO prepare issue
`PDO::prepare()` and `bindParam()` are designed to handle data within the query, not SQL identifiers like table names. In your case, the `:table_name` placeholder is treated as a string literal, so the table names are quoted, resulting in tables named literally as `':table_name'`.

In SQL, you cannot use parameter binding for table names or column names because they are identifiers, not values. You have to dynamically build the SQL string for each table instead of using `bindParam()`.


# What is `.htaccess`?

`.htaccess` is a configuration file used by Apache web servers to control various aspects of the server’s behavior. It is placed in the root or any other directory of a website, and it allows you to make changes to the server’s configuration without accessing the main Apache configuration file. The `.htaccess` file is especially useful in shared hosting environments where users don't have access to the main server configuration.

### Some common uses of `.htaccess` files include:
- URL rewriting (for SEO-friendly URLs)
- Redirects (e.g., from HTTP to HTTPS)
- Directory protection (e.g., password protection)
- Custom error pages (e.g., 404 error)
- File handling and access control

---

## Understanding Your Code

### File: `project/.htaccess`

```apache
<IfModule mod_rewrite.c>
  RewriteEngine on
  RewriteRule ^$ public/ [L]
  RewriteRule (.*) public/$1 [L]
</IfModule>
```
### Breakdown:

* `<IfModule mod_rewrite.c>`: This checks if the mod_rewrite module is enabled in Apache. mod_rewrite is responsible for URL rewriting, which allows you to manipulate URLs to make them more user-friendly or functional.

* RewriteEngine on: This turns on the URL rewriting engine.

* RewriteRule ^$ public/ [L]:

* `^$`: This matches the root URL (i.e., when the URL ends with / or nothing).
public/: This tells the server to redirect to the public/ directory when the root URL is accessed.
* `[L]`: This means "last rule," indicating that if this rule matches, no further rules will be processed.
RewriteRule (.*) public/$1 [L]:

* `(.*)`: This matches any URL path after the root (e.g., /about, /contact).
public/$1: This rewrites the URL to point to the public/ directory. The $1 is a backreference to the part of the URL matched by (.*), so it appends whatever path was matched to public/.
* `[L]`: Again, this means "last rule," so no further rules are processed if this one matches.

### Purpose:
This .htaccess file is used to route all incoming requests to the public/ directory. The first rule ensures that the base URL (/) points to public/, and the second rule ensures that any other URL is also routed to public/, maintaining the same path structure.


### File: `project/.htaccess`

```apache
<IfModule mod_rewrite.c>
  Options -Multiviews
  RewriteEngine On
  RewriteBase /training/wd-b11/lecture-18/project/public
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule  ^(.+)$ index.php?url=$1 [QSA,L]
</IfModule>
```
* `<IfModule mod_rewrite.c>`: This checks if the mod_rewrite module is enabled in Apache. mod_rewrite is responsible for URL rewriting, which allows you to manipulate URLs to make them more user-friendly or functional.

* Options -Multiviews: This disables the Multiviews feature, which can sometimes conflict with the routing system by automatically selecting files that match part of the requested URL.

* RewriteEngine On: This enables the URL rewriting engine.

* RewriteBase `/training/wd-b11/lecture-18/project/public`:

* RewriteBase sets the base URL for all rewrite rules that follow. In this case, it's setting the base to `/training/wd-b11/lecture-18/project/public`, meaning all rewrites will be relative to this path.
* RewriteCond `%{REQUEST_FILENAME} !-d`: This condition checks if the requested resource is not a directory (!-d).

* RewriteCond `%{REQUEST_FILENAME} !-f`: This condition checks if the requested resource is not a file (!-f).

* RewriteRule `^(.+)$` index.php?url=$1 [QSA,L]:

* `^(.+)$`: This matches any URL after the base path.
index.php?url=$1: This rewrites the URL to point to index.php, passing the original path as a query parameter url. $1 refers to the part of the URL matched by (.+).
* `[QSA]`: This appends any existing query parameters to the rewritten URL.
* `[L]`: This means "last rule" — no further rules are processed after this.

### Purpose:
This .htaccess file inside the public directory is used to implement "pretty URLs." Instead of accessing PHP scripts like index.php?page=about, this rule allows URLs like /about, which are cleaner and more user-friendly.

If a request is for an actual file or directory (!-f and !-d), it will be served directly. Otherwise, the request will be routed to index.php, which will handle the request by interpreting the URL as a parameter.