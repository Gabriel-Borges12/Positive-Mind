const data = {
    currentUser: {
      image: {
        png: "./img/productoOwnerBorges.jpeg",
            webp: "./img/productoOwnerBorges.jpeg",
      },
      username: "gabrielborges",
    },
    comments: [
      {
        parent: 0,
        id: 1,
        content:
          "Estou tão grato por encontrar esta comunidade. Por muito tempo, me senti sozinho em minha batalha contra a depressão. Aqui, finalmente encontrei um lugar onde posso compartilhar minhas experiências sem medo de julgamento. Obrigado a todos por serem tão acolhedores.",
        createdAt: "1 mês atrás",
        score: 12,
        user: {
          image: {
            png: "./img/desenvolvedorLeonardo.jpg",
            webp: "./img/desenvolvedorLeonardo.jpg",
          },
          username: "leonardolopes",
        },
        replies: [],
      },
      {
        parent: 0,
        id: 2,
        content:
          "Estou começando minha jornada em direção à recuperação da minha saúde mental. É assustador, mas estou determinado a seguir em frente e buscar ajuda. Qualquer conselho ou encorajamento seria muito apreciado.",
        createdAt: "2 semanas atrás",
        score: 5,
        user: {
          image: {
            png: "./img/productoOwnerBorges.jpeg",
            webp: "./img/productoOwnerBorges.jpeg",
          },
          username: "gabrielborges",
        },
        replies: [
          {
            parent: 2,
            id: 1,
            content:
              "Parabéns por dar esse primeiro passo corajoso! Buscar ajuda é um grande passo na direção certa. Não tenha medo de compartilhar suas preocupações e perguntas aqui na comunidade. Estamos aqui para apoiá-lo em sua jornada de recuperação.",
            createdAt: "1 semana atrás",
            score: 4,
            replyingTo: "gabrielborges",
            user: {
              image: {
                png: "./img/desenvolvedorMariane.jpg",
                webp: "./img/desenvolvedoraMariane.jpg",
              },
              username: "marianemoreira",
            },
          },
          {
            parent: 2,
            id: 1,
            content:
              "Obrigado pelo apoio! É reconfortante saber que não estou sozinho nesta jornada. Vou definitivamente aproveitar a comunidade para obter mais apoio e orientação.",
            createdAt: "2 dias atrás",
            score: 2,
            replyingTo: "marianemoreira",
            user: {
              image: {
                png: "./img/productoOwnerBorges.jpeg",
                webp: "./img/productoOwnerBorges.jpeg",
              },
              username: "gabrielborges",
            },
          },
        ],
      },
    ],
  };
  function appendFrag(frag, parent) {
    var children = [].slice.call(frag.childNodes, 0);
    parent.appendChild(frag);
    //console.log(children);
    return children[1];
  }
  
  const addComment = (body, parentId, replyTo = undefined) => {
    let commentParent =
      parentId === 0
        ? data.comments
        : data.comments.filter((c) => c.id == parentId)[0].replies;
    let newComment = {
      parent: parentId,
      id:
        commentParent.length == 0
          ? 1
          : commentParent[commentParent.length - 1].id + 1,
      content: body,
      createdAt: "Agora",
      replyingTo: replyTo,
      score: 0,
      replies: parent == 0 ? [] : undefined,
      user: data.currentUser,
    };
    commentParent.push(newComment);
    initComments();
  };
  const deleteComment = (commentObject) => {
    if (commentObject.parent == 0) {
      data.comments = data.comments.filter((e) => e != commentObject);
    } else {
      data.comments.filter((e) => e.id === commentObject.parent)[0].replies =
        data.comments
          .filter((e) => e.id === commentObject.parent)[0]
          .replies.filter((e) => e != commentObject);
    }
    initComments();
  };
  
  const promptDel = (commentObject) => {
    const modalWrp = document.querySelector(".modal-wrp");
    modalWrp.classList.remove("invisible");
    modalWrp.querySelector(".yes").addEventListener("click", () => {
      deleteComment(commentObject);
      modalWrp.classList.add("invisible");
    });
    modalWrp.querySelector(".no").addEventListener("click", () => {
      modalWrp.classList.add("invisible");
    });
  };
  
  const spawnReplyInput = (parent, parentId, replyTo = undefined) => {
    if (parent.querySelectorAll(".reply-input")) {
      parent.querySelectorAll(".reply-input").forEach((e) => {
        e.remove();
      });
    }
    const inputTemplate = document.querySelector(".reply-input-template");
    const inputNode = inputTemplate.content.cloneNode(true);
    const addedInput = appendFrag(inputNode, parent);
    addedInput.querySelector(".bu-primary").addEventListener("click", () => {
      let commentBody = addedInput.querySelector(".cmnt-input").value;
      if (commentBody.length == 0) return;
      addComment(commentBody, parentId, replyTo);
    });
  };
  
  const createCommentNode = (commentObject) => {
    const commentTemplate = document.querySelector(".comment-template");
    var commentNode = commentTemplate.content.cloneNode(true);
    commentNode.querySelector(".usr-name").textContent =
      commentObject.user.username;
    commentNode.querySelector(".usr-img").src = commentObject.user.image.webp;
    commentNode.querySelector(".score-number").textContent = commentObject.score;
    commentNode.querySelector(".cmnt-at").textContent = commentObject.createdAt;
    commentNode.querySelector(".c-body").textContent = commentObject.content;
    if (commentObject.replyingTo)
      commentNode.querySelector(".reply-to").textContent =
        "@" + commentObject.replyingTo;
  
    commentNode.querySelector(".score-plus").addEventListener("click", () => {
      commentObject.score++;
      initComments();
    });
  
    commentNode.querySelector(".score-minus").addEventListener("click", () => {
      commentObject.score--;
      if (commentObject.score < 0) commentObject.score = 0;
      initComments();
    });
    if (commentObject.user.username == data.currentUser.username) {
      commentNode.querySelector(".comment").classList.add("this-user");
      commentNode.querySelector(".delete").addEventListener("click", () => {
        promptDel(commentObject);
      });
      commentNode.querySelector(".edit").addEventListener("click", (e) => {
        const path = e.path[3].querySelector(".c-body");
        if (
          path.getAttribute("contenteditable") == false ||
          path.getAttribute("contenteditable") == null
        ) {
          path.setAttribute("contenteditable", true);
          path.focus()
        } else {
          path.removeAttribute("contenteditable");
        }
        
      });
      return commentNode;
    }
    return commentNode;
  };
  
  const appendComment = (parentNode, commentNode, parentId) => {
    const bu_reply = commentNode.querySelector(".reply");
    // parentNode.appendChild(commentNode);
    const appendedCmnt = appendFrag(commentNode, parentNode);
    const replyTo = appendedCmnt.querySelector(".usr-name").textContent;
    bu_reply.addEventListener("click", () => {
      if (parentNode.classList.contains("replies")) {
        spawnReplyInput(parentNode, parentId, replyTo);
      } else {
        //console.log(appendedCmnt.querySelector(".replies"));
        spawnReplyInput(
          appendedCmnt.querySelector(".replies"),
          parentId,
          replyTo
        );
      }
    });
  };
  
  function initComments(
    commentList = data.comments,
    parent = document.querySelector(".comments-wrp")
  ) {
    parent.innerHTML = "";
    commentList.forEach((element) => {
      var parentId = element.parent == 0 ? element.id : element.parent;
      const comment_node = createCommentNode(element);
      if (element.replies && element.replies.length > 0) {
        initComments(element.replies, comment_node.querySelector(".replies"));
      }
      appendComment(parent, comment_node, parentId);
    });
  }
  
  initComments();
  const cmntInput = document.querySelector(".reply-input");
  cmntInput.querySelector(".bu-primary").addEventListener("click", () => {
    let commentBody = cmntInput.querySelector(".cmnt-input").value;
    if (commentBody.length == 0) return;
    addComment(commentBody, 0);
    cmntInput.querySelector(".cmnt-input").value = "";
  });
  
  // addComment("Hello ! It works !!",0);